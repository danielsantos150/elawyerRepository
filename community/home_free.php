<?php
include("../js/scripts.php");
include("operations_chat.php");
include_once("../connections/conection.php");

$model = new Model();
$result = $model->users_online($con);
$qtd = mysqli_num_rows($result);
$usuarios = "";
$usuOnlines = "";
for ($i = 1; $i <= $qtd; $i++) {
    $linha = mysqli_fetch_assoc($result);

    $usuarios .= "<li class='list-group-item' style='background-color: #61cc0a; border: #0f0f0f'>
                        $linha[users]
                    </li>";

    $usuOnlines .= "<tr><td>
                            <input type='radio' id='userReport' name='userReport' value=$linha[users]>&nbsp&nbsp $linha[users]
                      </td></tr>";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link rel="icon" href="../bootstrap/icon1.png">
    <link href="chat.css" rel="stylesheet">
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <script src="../bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
    <script src="../js/js.js"></script>
    <title><?php include '../actions_login/title.php'; ?></title>

</head>

<body style="background-image: url('../inc/background.png')">
<nav class="navbar-inverse navbar-static-top">

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
            <li><a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            </li>
            <li><a href="../actions_login/home_free.php">Home</a></li>
            <li><a href="../options_home/about_us_free.php">Sobre nós</a></li>
            <li><a class="active" href="home_free.php">Comunidade</a></li>
            <li><a href="../login2.php">Sair</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a>Bem Vindo ao E-LAWYER! &nbsp;&nbsp;&nbsp;&nbsp;<span class="sr-only">(current)</span></a></li>
        </ul>
    </div>
</nav>
<div class="container" style="height: 600px; width: 1300px;">
    <div class="row">
        <div class="col-md-1">
            <ul class='list-group'>
                <li class='list-group-item active' style="background-color: #6B4226; border: 0px;">Usuários Online</li>
                <?php
                echo $usuarios;
                ?>
            </ul>
        </div>
        <div class="col-md-11">
            <div class="panel panel-primary" style="border: 0px;">
                <div class="panel-heading" style="background-color: #6B4226;">
                    <span class="glyphicon glyphicon-comment"></span>&nbsp;&nbsp;Comunidade
                </div>
                <div class="panel-body" id="recent_activity">
                    <ul class="chat">

                        <?php echo $mensagem; ?>

                    </ul>
                </div>
                <form id="form_envia" name="form_envia" method="POST"
                      action="operations_chat.php?send=<?php echo date('U') ?>">
                    <div class="panel-footer">
                        <div class="input-group">
                            <input id="btn-input" name="MSG" type="text" class="form-control input-sm"
                                   placeholder="Escreva sua mensagem aqui..." autocomplete="off">
                            <span class="input-group-btn">
                            <button class="btn btn-warning btn-sm" id="btn-chat">
                                Enviar</button>
                        </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Usuários Online</h4>
                </div>
                <div class="modal-body">
                    <p>Selecione o usuário desejado:</p>
                    <table>
                        <?php echo $usuOnlines; ?>
                        <tr>
                            <td>
                                <br>
                                <textarea id="reasons" id="reasons" class="textarea"
                                          placeholder="Digite aqui o motivo da denúncia ..."
                                          style="width: 500px; height: 100px"></textarea>
                            </td>
                        </tr>
                    </table>
                </div>
                <br>
                <div class="col-md-4">
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                </div>
                <div class="col-md-8">
                    <div class="input-group image-preview">
                        <input type="text" class="form-control image-preview-filename" disabled="disabled">
                        <span class="input-group-btn">
                            <div class="btn btn-default image-preview-input" style="height: 50px">
                                <span class="glyphicon glyphicon-folder-open"></span>
                                <span class="image-preview-input-title" style="width: 15px">Prova</span>
                                <input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>
                            </div>
                        </span>
                    </div>
                </div>
                <div class="modal-footer">
                    <button id="btnReport" type="button" class="btn btn-default" style="color: red"
                            onclick="verificaSelect('userReport');">Denunciar
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>
</body>
</html>