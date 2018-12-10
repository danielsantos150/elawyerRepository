<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 14/10/2018
 * Time: 16:49
 */

    include_once "oprations_my_cases.php";

    include_once("../connections/conection.php");
    include_once("../connections/Model.php");

    $model = new Model();


    if(isset($_POST) && isset($_POST["idCaso"])){
        $id = $_POST["idCaso"];
        $msg = $_POST["comment"];

        $result = $model->atualizaDescricao($con, $id, $msg);
        header("Refresh:1");
    }

    if(isset($_POST) && isset($_POST["close"])){
        $id = $_POST["close"];

        $result = $model->encerraCaso($con, $id);
        header("Refresh:1");
    }

    if(isset($_POST) && isset($_POST["newCase"])){
        //var_dump($_POST);EXIT;
        $advogado = $_POST["inputLaw"];
        $descricao = $_POST["describe"];

        $resultNome = $model->takeName($_SESSION["usuario"], $con);
        $client = mysqli_fetch_assoc($resultNome);
        $client = $client["name"];

        if($advogado == "Selecione..."){
            $advogado = "Não selecionado";
        }

        $result = $model->cadastraCaso($con, $advogado, $descricao, $client);
        header("Refresh:1");
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
    <title><?php include '../actions_login/title.php'; ?></title>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../bootstrap/assets/js/ie-emulation-modes-warning.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body style="background-image: url('../inc/background.png')">
<nav class="navbar navbar-inverse navbar-static-top">
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
                <li><a href="../actions_login/home.php">Home</a></li>
                <li><a href="../options_home/about_us.php">Sobre nós</a></li>
                <li><a href="../community/chat.php">Comunidade</a></li>
                <li><a href="../options_home/contact_us.php">Fale Conosco</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Jurídico <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../law/lawyers.php">Advogados</a></li>
                    </ul>
                </li>
                <li class="dropdown active">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Minha Área <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../options_home/profile.php">Meu Perfil</a></li>
                        <li><a href="my_cases.php">Meus Casos</a></li>
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
<form id="form_contact" method="POST">
    <div class="container">
        <h3>Meus Casos Jurídicos!</h3>
        <br>
        <div class="text-right">
            <button type="button" class="btn btn-primary" style="border: 0px; background-color: #00CC00;"
                    data-toggle="modal" data-target="#modalNewCase"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Cadastrar Caso
            </button>
        </div>
        <br>
        <table id="mytable" class="table table-bordred table-striped">
            <?php echo $my_cases; ?>
        </table>
    </div>
</form>

<?php echo $modalAtualiza; ?>

<?php echo $modelEncerra;?>

    <div class="modal fade" id="modalNewCase" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content" style="height: 290px;">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Cadastrar um Novo Caso</h4>
                </div>
                <div class="modal-body col-md-12">
                    <form class="form" id="form1" name="form1" method="POST" action=# autocomplete="off">
                        <div class="form-group col-md-6">
                            <label for="inputLaw">Advogado</label>
                            <select id="inputLaw" name="inputLaw" class="form-control">
                                <option selected>Selecione...</option>
                                <?php echo $advogadosOptions; ?>
                            </select>
                        </div>
                        <div class="form-group col-md-10">
                            <label for="describe">Descrição</label>
                            <textarea rows="2" id="describe" name="describe" class="form-control" placeholder="Digite aqui a descrição"></textarea>
                        </div>
                        <input type="hidden" name="newCase" id="newCase" value='TRUE'>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success">
                                <span class="glyphicon glyphicon-ok-sign"></span>&nbsp;&nbsp;Cadastrar
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
