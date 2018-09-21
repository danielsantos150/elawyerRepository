<?php
include("../js/scripts.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../bootstrap/icon1.png">
    <title><?php include 'title.php'; ?></title>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="../bootstrap/signin.css" rel="stylesheet">
    <script src="../bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>
<body>
<div class="container">

    <form class="form2-signup" id="form" name="form" method="POST" action="../login2.php">
        <center><h2 class="form-signin-heading">E-LAWYER</h2></center>
        <div class="form-row">
            <div class="form-group col-md-12">
                <label for="inputName">Nome Completo</label>
                <input type="text" class="form-control" id="inputName" name="inputName" placeholder="Nome Completo"
                       required>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="inputEmail4"
                       placeholder="Email address required">
            </div>

            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="inputPassword4"
                       placeholder="Senha" required>
            </div>

        </div>
        <div class="form-group col-md-12">
            <label for="inputAddress">Endereço</label>
            <input type="text" class="form-control" id="inputAddress" name="inputAddress" placeholder="Rua, Bairro"
                   required>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputCity">Cidade</label>
                <input type="text" class="form-control" id="inputCity" name="inputCity" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputState">Estado</label>
                <select id="inputState" name="inputState" class="form-control">
                    <option selected>Selecione...</option>
                    <option value="MG">MG</option>
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                </select>
            </div>
            <div class="form-group col-md-2">
                <label for="inputZip">CEP</label>
                <input type="text" class="form-control" id="inputZip" name="inputZip" placeholder="00000-000"
                       maxlength="8" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-4">
                <label for="inputState">Sexo</label>
                <select id="inputSex" name="inputSex" class="form-control">
                    <option selected>Selecione...</option>
                    <option value="MG">Masculino</option>
                    <option value="SP">Feminino</option>
                    <option value="RJ">Outro</option>
                </select>
            </div>
            <div class="form-group col-md-4">
                <label for="inputDate">Data de Nascimento</label>
                <input type="date" class="form-control" name="inputDate" id="inputDate" required>
            </div>
            <div class="form-group col-md-4">
                <label for="inputPerfil">Perfil</label>
                <select id="inputPerfil" name="inputPerfil" class="form-control">
                    <option selected>Selecione...</option>
                    <option value="advogado">Advogado</option>
                    <option value="cliente">Cliente</option>
                    <option value="free">Free-Cause</option>
                    <option value="consult">Consultor</option>
                </select>
            </div>
        </div>
        <br>
        <div class="form-row col-md-11">
            <div class="form-group col-md-4"></div>
            <div class="form-group col-md-6">
                <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
            </div>
        </div>
    </form>
</div>

<script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
