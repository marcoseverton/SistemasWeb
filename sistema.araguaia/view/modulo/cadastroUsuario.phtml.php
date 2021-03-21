<?php?>
<!DOCTYPE html>
<html>
    <head>
        <title>Cadastro</title>
        <link href="../design/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
        <link href="../design/mais-estilos/css01.css" rel="stylesheet" id="bootstrap-css">
        <link href="../design/bootstrap/bootstrap-icons-1.4.0/bootstrap-icons.css" rel="stylesheet" id="bootstrap-css">
    </head>
    <body>
        <div class="container">
            <div class="d-flex justify-content-center h-100">
                <div class="card2">
                    <div class="formulario">
                        <h3 class="tituloCadastro">CADASTRAMENTO DE USUÁRIO </h3>
                        <form>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="email">EMAIL</label>
                                    <input type="email" class="form-control" id="email" placeholder="INFORME O EMAIL">
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
                                <label for="cpf">CPF</label>
                                <input type="text" class="form-control" id="cpf" placeholder="INFORME O SEU CPF">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <label for="inputCity">City</label>
                                    <input type="text" class="form-control" id="inputCity">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputState">State</label>
                                    <select id="inputState" class="form-control">
                                        <option selected>Choose...</option>
                                        <option>...</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="inputZip">Zip</label>
                                    <input type="text" class="form-control" id="inputZip">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="gridCheck">
                                    <label class="form-check-label" for="gridCheck">
                                        Check me out
                                    </label>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>