<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 29/09/2018
 * Time: 15:52
 */

if (isset($_GET["success"])) {
    //falta enviar o email com as informações...
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

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
                <li><a href="../actions_login/home.php">Home</a></li>
                <li><a href="../options_home/about_us.php">Sobre nós</a></li>
                <li><a href="../community/chat.php">Comunidade</a></li>
                <li class="active"><a href="contact_us.php">Fale Conosco</a></li>
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Minha Área <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../options_home/profile.php">Meu Perfil</a></li>
                        <li><a href="../law/my_cases.php">Meus Casos</a></li>
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
<br>
<br><br><br><br>
<form id="form_contact" method="POST" action="contact_us.php?success=true">
    <div class="container">
        <!------ Include the above in your HEAD tag ---------->
        <h3 class="text-center">FALE CONOSCO!</h3></center>
        <p class="text-center">
            Tem alguma sugestão, dúvida, ajuda ou deseja mandar uma mensagem diretamente para nós?
        </p>
        <p class="text-center">Utilize o nosso formulário logo abaixo.</p>
        <br>
        <div class="form-horizontal col-md-12">
            <div class="container">
                <?php
                if (isset($_GET["success"])) {
                    echo "<div class='alert alert-success' >Mensagem encaminhada com sucesso!</div>";
                }
                ?>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput_nome">Nome</label>
                    <div class="col-md-4">
                        <input id="textinput_nome" name="textinput_nome" placeholder="Seu nome"
                               class="form-control input-md" required="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-4 control-label" for="textinput_email">Email</label>
                    <div class="col-md-4">
                        <input id="textinput_email" name="textinput_email" placeholder="Seu e-mail"
                               class="form-control input-md" required="" type="email">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="textarea_mensagem">Mensagem</label>
                    <div class="col-md-4">
                        <textarea class="form-control" id="textarea_mensagem" name="textarea_mensagem" required=""
                                  placeholder="Digite aqui sua mensagem"></textarea>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-4 control-label" for="singlebutton_enviar"></label>
                    <div class="col-md-4">
                        <button id="singlebutton_enviar" name="singlebutton_enviar" type="submit"
                                class="btn btn-primary">Enviar
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <footer>
            <p>&copy; 2018 Company, Inc.</p>
        </footer>
    </div>
</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="../bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="../bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
