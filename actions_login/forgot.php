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
<body style="background-image: url('../inc/background.png')">
    <div class="container">

        <form class="form-signin" id="form2" name="form2" method="POST" action="../login2.php?forgot=1"
              autocomplete="off">

            <h2 class="form-signin-heading" style="text-align: center;">E-LAWYER</h2>
            <br>
            <p>Esqueceu a sua senha?</p>
            <p>Escreva seu email que iremos redefinir sua senha!</p>
            <br>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required
                   autofocus
                   autocomplete="off">
            <br>
            <button class="btn btn-lg btn-primary btn-block" style="background-color: #8a6d3b;border: 0px;text-align: center;">ENVIAR</button>
            <br>

        </form>

    </div>

<script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
