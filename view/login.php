<?php
/**
 * View Login
 * Autor: Plínio Araújo
 */

session_start();

$PageTitle = "Login";
function customPageHeader(){?>

<?php }

include_once('./resources/_header.php');

?>

    <!-- o Body vem aqui -->
    <!-- login form -->
    <section class="h-100 gradient-form" style="background-color: #eee;">
        <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">'
                <div class="col-xl-10">
                    <div class="card rounded-3 text-black">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="card-body p-md-5 mx-md-4 text-white">

                                    <div class="text-center text-white">
                                        <!-- <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                            style="width: 185px;" alt="logo"> -->
                                        <h4 class="mt-1 mb-5 pb-1">Portal de premiações</h4>
                                    </div>

                                    <form action="../control/control_login.php" method="post">
                                        <p>Por favor, faça o login com a sua conta</p>

                                        <?php if(isset($_GET['error'])){ ?>
                                            <p class="error"><?php echo $_GET['error']; ?></p>
                                        <?php } ?>

                                        <div class="form-outline mb-4">
                                            <span class="fa fa-lock"></span>
                                            <label for="usuario">Usuário</label>
                                            <input type="text" id="usuario" class="form-control" name="usuario" placeholder="Usuário"/>
                                            <!-- <label class="form-label" for="form2Example11">Usuário</label> -->
                                        </div>

                                        <div class="form-outline mb-4">
                                            <label for="senha">Senha</label>
                                            <input type="password" id="senha" class="form-control" name="senha" placeholder="Senha"/>
                                            <!-- <label class="form-label" for="form2Example22">Senha</label> -->
                                        </div>

                                        <div class="text-center pt-1 mb-5 pb-1">
                                            <button class="btn btn-primary btn-block fa-lg gradiente" type="submit">Log in</button>
                                        </div>
                                        <div class="container text-center justify-content-center">
                                            <a class="text-muted " href="./mudarSenha">Esqueci a senha</a>
                                        </div>

                                        <!-- <div class="d-flex align-items-center justify-content-center pb-4">
                                            <p class="mb-0 me-2 text-center">Não tem uma conta?</p>
                                            <button type="button" class="btn btn-danger">Entre em contato</button>
                                        </div> -->
                                    </form>

                                </div>
                            </div>
                            <div class="col-lg-6 d-flex align-items-center justify-content-center gradiente container">
                                <div class="text-white text-center">
                                    <!-- px-3 py-4 p-md-5 mx-md-4 -->
                                    <h4 class="mb-4">Leão Diesel</h4>
                                    <p class="small mb-0">Desde 1961 no mercado.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
include_once('./resources/_footer.php');
?>