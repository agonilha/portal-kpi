create table if not exists aux_emp_usuario
(
    usuario varchar(20) not null,
    empresa int         not null,
    padrao  varchar(1)  not null,
    primary key (usuario, empresa)
    );

create table if not exists aux_perfil_usuario
(
    perfil  int         not null,
    usuario varchar(20) not null,
    primary key (perfil, usuario)
    );

create table if not exists empresa
(
    codigo int         not null
    primary key,
    nome   varchar(50) not null
    );

create table if not exists perfil
(
    id_perfil int         not null
    primary key,
    descricao varchar(50) not null
    );

create table if not exists setor
(
    id_setor  int auto_increment
    primary key,
    descricao varchar(50) not null
    );

create table if not exists usuario
(
    usuario  varchar(20)            not null
    primary key,
    senha    varchar(50)            not null,
    nome     varchar(50)            not null,
    id_setor int        default 1   not null,
    ativo    varchar(1) default 'A' not null
    );

