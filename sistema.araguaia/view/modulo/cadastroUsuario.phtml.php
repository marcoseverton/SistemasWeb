<?php?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <link href="../design/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="../design/mais-estilos/css01.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card2">
                    <div style="padding: 30px;">
                        <h3 class="tituloCadastro" style="padding-bottom: 30px;">CADASTRO
                            <img src="../design/img/icone-cadastro.png"/>
                        </h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="cpf">CPF</label>
                                        <input type="text" class="form-control" id="cpf" placeholder="INFORME O SEU CPF">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="senha1">SENHA</label>
                                    <input type="password" class="form-control" id="senha1" placeholder="INFORME UMA SENHA">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="senha2">CONFIRMAR</label>
                                    <input type="password" class="form-control" id="senha2" placeholder="CONFIRME A SENHA">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="nome">NOME</label>
                                <input type="text" class="form-control" id="nome" placeholder="INFORME O SEU NOME COMPLETO">
                            </div>
                            <div class="form-group">
                                <label for="email">EMAIL</label>
                                <input type="email" class="form-control" id="email" placeholder="INFORME O SEU EMAIL PRINCIPAL">
                            </div>
                            <div class="btn btn-group" >
                                <div class="col-lg-12">
                                    <button type="button" class="btn btn-cadastrar">CONCLUIR</button>
                                </div>
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-cancelar">CANCELAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>