<?php
include("js/scripts.php");
include("connections/conection.php");
include("connections/Model.php");

$model = new Model();

if (isset($_POST["inputName"])) {
    $nome = $_POST["inputName"];
    $email = $_POST["inputEmail4"];
    $password = $_POST["inputPassword4"];
    $address = $_POST["inputAddress"];
    $city = $_POST["inputCity"];
    $zip = $_POST["inputZip"];
    $sex = $_POST["inputSex"];
    $date = $_POST["inputDate"];
    $perf = $_POST["inputPerfil"];

    $_SESSION['usuario'] = $email;

    date_default_timezone_set('America/Sao_Paulo');
    $dateNow = date('Y-m-d');

    $data1 = new DateTime( $date );
    $data2 = new DateTime( $dateNow );

    $intervalo = $data1->diff( $data2 );

    $result = $model->regist_user($email, $password, $address, $city, $perf, $nome, $con);

    if($perf == 0){
        $phone = "";
        $mobile = "";
        $age = $intervalo->y;
        $result = $model->cadastraAdvogado($con, $nome, $email, $age);
    }

    if ($result == 1) {
        echo "<script> alert ('Cadastro realizado com sucesso!')</script>";
    } else {
        echo "<script> alert ('Falha ao realizar cadastro!')</script>";
    }
}


if (isset($_GET["forgot"]) && $_GET["forgot"] == 1 && isset($_POST["inputEmail"])) {

    $email = $_POST["inputEmail"];
    $_SESSION['usuario'] = $email;
    $result = $model->reset_password($email, $con);

    if ($result) {
        echo "<script> alert ('Sua nova senha é:  $result') </script>";
    }

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="bootstrap/icon1.png">
    <title><?php include 'actions_login/title.php'; ?></title>
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="bootstrap/signin.css" rel="stylesheet">
    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body style="background-image: url('inc/background.png')">
    <div class="container">

        <form class="form-signin" id="form1" name="form1" method="POST" action="actions_login/home.php" autocomplete="off">
            <h2 class="form-signin-heading">E-LAWYER</h2>

            <?php
            if (isset($_GET['msg'])) {
                if ($_GET['msg'] == 1) {
                    echo "<div class='alert alert-warning' style='width: 300px;'><strong>Aviso!</strong> É necessário confirmar o reCaptcha para continuar.</div>";
                } elseif ($_GET['msg'] == 2) {
                    echo "<div class='alert alert-danger' style='width: 300px;'><strong>Usuário ou Senha inválidos!</strong></div>";
                } elseif ($_GET['msg'] == 5) {
                    echo "<div class='alert alert-warning' style='width: 300px;'><strong>Sua sessão expirou, por gentileza faça o login novamente.</strong></div>";
                } elseif ($_GET['msg'] = 3) {
                    echo "<div class='alert alert-success' style='width: 300px;'><strong>Usuário cadastrado com sucesso!</strong></div>";
                } elseif ($_GET['msg'] = 4) {
                    echo "<div class='alert alert-danger' style='width: 300px;'><strong>Falha ao cadastrar usuário!</strong></div>";
                }
            }
            ?>

            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="Email address" required
                   autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Password"
                   required>
            <button type="button" class="btn btn-sm btn-link" onclick="redirect_login('forgot.php')">Esqueci minha senha
            </button>
            <button type="button" class="btn btn-sm btn-link" onclick="redirect_login('signup.php')">Não possui cadastro?
                Cadastre-se agora!
            </button>
            <a class="btn btn-sm btn-link" href="community/home_free.php">Entrar como Free-Cause</a>

            <div class="g-recaptcha" data-sitekey="6LeJxG0UAAAAAN45DcMNRLMlDYhK465zhUR-y_km"></div>
            <br>
            <button class="btn btn-lg btn-primary btn-block" style="background-color: #8a6d3b; border: 0px;" type="submit">ENTRAR</button>
        </form>

    </div>

<script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
