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

    <form class="form-signin" id="form2" name="form2" method="POST" action="../login2.php"
          onSubmit="javascript:showMenssage();" autocomplete="off">

        <center><h2 class="form-signin-heading">E-LAWYER</h2></center>
        <br>
        <p>Esqueceu a sua senha?</p>
        <p>Escreva seu email que enviaremos uma nova senha por e-mail!</p>
        <br>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus
               autocomplete="off">
        <br>
        <center>
            <button class="btn btn-lg btn-primary btn-block">ENVIAR</button>
        </center>
        <br>

    </form>

</div>

<script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
