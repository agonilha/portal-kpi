# Lista de diagramas

Essa é a lista dos diagramas UML utilizados na etapa de análise do projeto.

- [Diagrama de caso de uso usando PlantUML](#diagrama-de-caso-de-uso)
- [Diagrama Entidade-Relacionamento utilizando Mermaid](#diagrama-entidade-relacionamento--der-)
---
## Links úteis durante o desenvolvimento
- [Documentação do PlantUML](https://plantuml.com/use-case-diagram)
- [Documentação do Mermaid](https://mermaid.js.org/config/Tutorials.html)

## Diagrama de caso de uso

```plantuml
@startuml
:Gerente:
:Colaborador:
:RH:
:TI:

package Gerência {
    (Gerenciar\nKPIs) as (g_geren_kpi)
    (Relatar\nKPI) as (g_editar_kpi)
    (Gerar\nRelatório) as (g_gerar_relatorio)
}

package Administração {
    (Gerenciar\nKPIs) as (adm_kpi)
    (Criar\nKPI) as (adm_criar)
    (Manutenção) as (adm_manutencao)
    (Definir Pesos\ne Métricas) as (adm_definir)
}

package Configuração {
    (Gerenciar\nConta) as (gerenciar_conta)
    (Trocar\nSenha) as (trocar_senha)
}

(Visualizar\nKPIs) as (vis_kpi)
(Contestar\nKPI) as (contestar)

Gerente --> g_geren_kpi
Colaborador --> vis_kpi
Colaborador --> contestar
RH --> adm_kpi
TI --> adm_manutencao

Gerente --> gerenciar_conta
Colaborador --> gerenciar_conta

(g_geren_kpi) <|-- (g_editar_kpi)
(g_geren_kpi) <|-- (g_gerar_relatorio)
(gerenciar_conta) <|-- (trocar_senha)
(adm_kpi) <|-- (adm_criar)
(adm_kpi) <|-- (adm_definir)

@enduml
```

```plantuml
@startuml firstDiagram
actor "IT" as IT
actor "HR" as HR
actor "Manager" as Manager
actor "Worker" as Worker

rectangle "Portal KPI" {
    IT --> (Manutenção)
    IT --> (Desenvolvimento de novas funcionalidades)

    HR --> (View KPI data)
    HR --> (Validate/approve KPI data)
    HR --> (Generate KPI reports)

    Manager --> (Enter KPI data)
    Manager --> (View historical KPI data)
    Manager --> (Request validation/approval)

    Worker --> (View own KPI data)
    Worker --> (View historical KPI data)
    Worker --> (Report issues/errors)
}

@enduml
```

```plantuml
@startuml secondDiagram
actor IT
actor HR
actor Manager
actor Worker

rectangle KPIManagementWebsite {
    IT --> (Access Dashboard)
    IT --> (Perform Maintenance)
    IT --> (Develop Features)

    HR --> (View KPIs)
    HR --> (Validate KPIs)
    HR --> (Generate Reports)

    Manager --> (Enter KPIs)
    Manager --> (View Historical KPIs)
    Manager --> (Request Validation)

    Worker --> (View Own KPIs)
    Worker --> (View Historical KPIs)
    Worker --> (Report Issues)

    (Access Dashboard) --> (View System Metrics)
    (Access Dashboard) --> (View Logs)
    (View KPIs) --> (Related to Worker Presence/Absence)
    (Enter KPIs) --> (Related to Worker Presence/Absence)
    (View Historical KPIs) --> (For Workers Managed)
    (View Historical KPIs) --> (To Monitor Own Performance)
}

@enduml
```

## Diagrama Entidade-Relacionamento (DER)

```mermaid
graph TD

A(Client) --> B[Load Balancer]

B --> C[Server 01]
B --> D[Server 02]
C --> E
D --> E
E[Database Server]
```

```mermaid
erDiagram
    Worker ||--o{ KPI : has
    Manager ||--o{ KPI : enters
    HR ||--o{ KPI : validates
    KPI ||--o{ Presence : tracks
    Presence ||--|| Absence : is
```

```mermaid
erDiagram
    User ||--o{ Department : "belongs to"
    User ||--|{ Profile : has
    User ||--|{ Company : "has access to"
    Department ||--o{ Worker : has
    Company ||--o{ KPI : tracks
    Profile ||--|{ Permission : has

    User {
        string username
        string password
        boolean active
    }
    Department {
        int department_id
        string description
    }
    Company {
        int company_id
        string name
    }
    Profile {
        int profile_id
        string name
    }
    Worker {
        int worker_id
        string name
        string email
    }
    KPI {
        int kpi_id
        date date
        int presence
        int worker_id
        int company_id
    }
    Permission {
        int permission_id
        string name
        string description
    }
```