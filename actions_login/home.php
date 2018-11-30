<?php
include('../connections/Model.php');
include('../connections/conection.php');
session_start();

if (isset($_POST)) {


    if (isset($_POST["inputEmail"])) {
        $_SESSION["usuario"] = $_POST["inputEmail"];
    } else {
        if (!$_SESSION['usuario']) {
            header('Location: ../login2.php?msg=5');
        }
    }

    if (isset($_POST['g-recaptcha-response'])) {
        $resultado = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LeJxG0UAAAAAIrth9YRWfoMDupIz787XfjkaLn_&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR']);

        $obj = json_decode($resultado);

        if ($obj->{'success'} == false) {
            header('Location: ../login2.php?msg=1');
        } else {
            $model = new Model();

            $email = $_POST['inputEmail'];
            $password = $_POST['inputPassword'];
            $result = $model->select_user($email, $password, $con);

            if ($result == NULL) {
                header('Location: ../login2.php?msg=2');
            }

        }

    }
}

?>

<!DOCTYPE html>
<html lang="pt">
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
    <link href="navbar-fixed-top.css" rel="stylesheet">
    <script src="../bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

</head>

<body style="background-image: url('../inc/background.png')">
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-LAWYER</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="../options_home/about_us.php">Sobre nós</a></li>
                    <li><a href="../community/chat.php">Comunidade</a></li>
                    <li><a href="../options_home/contact_us.php">Fale Conosco</a></li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Jurídico <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../law/lawyers.php">Advogados</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../law/rank.php">Ranking</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Minha Área <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../options_home/profile.php">Meu Perfil</a></li>
                            <li><a href="../law/my_cases.php">Meus Casos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../login2.php">Sair</a></li>
                        </ul>
                    </li>

                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a>Bem Vindo ao E-LAWYER! <span class="sr-only">(current)</span></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="jumbotron">
            <h1>E-LAWYER</h1>
            <h3>Seu assistente Jurídico para o que der e vier!</h3>
            <div class="col-md-6">
                <h3>Direito Imobiliário</h3>
                <p align="justify" style="font-size: 15px">O Direito Imobiliário é um ramo do direito privado que possui
                    regras jurídicas acerca da propriedade sobre os bens imóveis.
                    Suas raízes estão, por isso, no direito de propriedade.
                </p>
                <p align="justify" style="font-size: 15px">Sua função é disciplinar os aspectos que dizem respeito ao
                    aluguel, compra e venda, doação, usucapião, financiamento de casa
                    própria, direito de vizinhança, posse, cessão de direitos, troca, aquisição e perda da propriedade,
                    direito de construir,
                    direito de preferência do inquilino, registro de imóveis e outras relações com o bem imóvel.</p>
            </div>
            <div class="col-md-6">
                <h3>Legislação Vigente</h3>
                <p style="font-size: 15px"><a href="http://www.normaslegais.com.br/legislacao/lei10406.htm" target="_blank">Código
                        Civil (Lei nº 10.406/2002)</a></p>
                <p style="font-size: 15px"><a href="http://www.planalto.gov.br/ccivil_03/Leis/L4591.htm" target="_blank">Lei
                        nº 4.591/64</a></p>
                <p style="font-size: 15px"><a href="http://www.planalto.gov.br/ccivil_03/Leis/L8245.htm" target="_blank">Lei
                        nº 8.245/91</a></p>
                <p style="font-size: 15px"><a href="http://www.planalto.gov.br/ccivil_03/Leis/L4380.htm" target="_blank">Lei
                        nº 4.380/64</a></p>
                <p style="font-size: 15px"><a href="http://www.planalto.gov.br/ccivil_03/Leis/L6015original.htm"
                                              target="_blank">Lei nº 6.015/73</a></p>
                <p style="font-size: 15px"><a href="http://www.planalto.gov.br/ccivil_03/Leis/l8078.htm" target="_blank">Lei
                        nº 8.078/90</a></p>
            </div>
            <p>
                <a class="" href="#navbar" role="button"> &nbsp;</a>
            </p>
        </div>
    </div>

    <div class="container">
        <!-- Aqui será adicionado informações dos envolvidos no projeto elawyer, bem como parceiros -->
        <div class="row">
            <div class="col-md-4">
                <h2>Daniel Santos</h2>
                <p>Descrição do profissional. </p>
                <p><a class="btn btn-default" href="#" role="button">Visitar Perfil &raquo;</a></p>
            </div>
            <div class="col-md-4">
                <h2>Fernanda Maia</h2>
                <!-- <center><img class="img-circle" src="../bootstrap/pessoa1.jpg" alt="Generic placeholder image" width="140"
                             height="140"></center>-->
                <p>Descrição do profissional.</p>
                <!-- <p><a class="btn btn-default" href="#" role="button">Visitar Perfil &raquo;</a></p> -->
            </div>
            <div class="col-md-4">
                <h2>Fernando Junior</h2><!-- <h2>Fernando Junior</h2> -->
                <!-- <center><img class="img-circle" src="../bootstrap/pessoa2.jpg" alt="Generic placeholder image" width="140"
                             height="140" style="border-radius: 5px"></center>-->
                <p>Descrição Profissional.</p>
                <p><a class="btn btn-default" href="#" role="button">Visitar Perfil &raquo;</a></p>
            </div>
        </div>
        <hr>
        <footer>
            <p>&copy; 2018 COTEMIG</p>
        </footer>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
