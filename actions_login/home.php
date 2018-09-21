<?php
include('../connections/Model.php');
include('../connections/conection.php');

if (isset($_POST)) {

    $resultado = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=6LeJxG0UAAAAAIrth9YRWfoMDupIz787XfjkaLn_&response=' . $_POST['g-recaptcha-response'] . '&remoteip=' . $_SERVER['REMOTE_ADDR']);
    //echo $resultado;exit;

    $obj = json_decode($resultado);

    if ($obj->{'success'} == false) {
        header('Location: ../login2.php?msg=1');
    } else {
        $model = new Model();

        $email = $_POST['inputEmail'];
        $password = $_POST['inputPassword'];
        $result = $model->select_user($email, $password, $con);

        $result = mysqli_fetch_assoc($result);

        if ($result == NULL) {
            header('Location: ../login2.php?msg=2');
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

<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>

        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="../options_home/about_us.php">Sobre nós</a></li>
                <li><a href="#contact">Fale Conosco</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Minha Área <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Meu Perfil</a></li>
                        <li><a href="#">Meus Casos</a></li>
                        <li><a href="../login2.php">Sair</a></li>
                        <li role="separator" class="divider"></li>
                        <li class="dropdown-header">Jurídico</li>
                        <li><a href="#">Advogados</a></li>
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
            <a class="btn btn-lg btn-primary" href="#navbar" role="button">Visite nossa comunidade &raquo;</a>
            <!-- Aqui é onde será o link para ir para a comunidade  #falta fazer#-->
        </p>
    </div>
</div>

<div class="container">
    <!-- Aqui será adicionado informações dos envolvidos no projeto elawyer, bem como parceiros -->
    <div class="row">
        <div class="col-md-4">
            <h2>Daniel Santos</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh,
                ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio
                dui. </p>
            <p><a class="btn btn-default" href="#" role="button">Visitar Perfil &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Fernanda Maia</h2>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris
                condimentum nibh,
                ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio
                dui. </p>
            <p><a class="btn btn-default" href="#" role="button">Visitar Perfil &raquo;</a></p>
        </div>
        <div class="col-md-4">
            <h2>Fernando Junior</h2>
            <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula
                porta felis euismod semper.
                Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit
                amet risus.</p>
            <p><a class="btn btn-default" href="#" role="button">Visitar Perfil &raquo;</a></p>
        </div>
    </div>
    <hr>
    <footer>
        <p>&copy; 2018 Company, Inc.</p>
    </footer>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
