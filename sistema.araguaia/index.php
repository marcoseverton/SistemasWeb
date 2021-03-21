<?php
    include_once "config/versoes.php";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>SISTEMA ARAGUAIA</title>
        <link href="view/design/bootstrap/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <link href="view/design/mais-estilos/css01.css" rel="stylesheet" id="bootstrap-css">
        <link href="view/design/bootstrap/bootstrap-icons-1.4.0/bootstrap-icons.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card">
                    <div class="card-header">
                        <h3 class="titulo">SISTEMA ARAGUAIA (<?php echo VS1;?>) </h3>
                        <div class="d-flex justify-content-end social_icon">
                            <span><i class="fab fa-facebook-square"></i></span>
                            <span><i class="fab fa-google-plus-square"></i></span>
                            <span><i class="fab fa-twitter-square"></i></span>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-1" style="width: 30px; height: 30px."  src="view/design/img/icons/person-fill.svg"/>
                                    </span>
                                </div>
                                <input type="text" class="form-control" placeholder="CPF">
                            </div>
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <img class="icon-1" style="width: 30px; height: 30px."  src="view/design/img/icons/key-fill.svg"/>
                                    </span>
                                </div>
                                <input type="password" class="form-control" placeholder="SENHA">
                            </div>
                            <div class="row align-items-center remember">
                                <input type="checkbox">Lembrar-me
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Entrar" class="btn float-right login_btn">
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <div class="d-flex justify-content-center links">
                            Não tem conta de acesso?<a class="links01" href="#">Click aqui para criar</a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <a class="links01" href="#" >Esqueceu a senha de acesso?</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>


