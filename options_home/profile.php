<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 29/09/2018
 * Time: 18:06
 */
    session_start();
    include "../connections/conection.php";
    include "../connections/Model.php";

    $model = new Model();

    $mail = $_SESSION['usuario'];

    $infoUser = $model->infoUser($mail, $con);
    $infoUser = mysqli_fetch_assoc($infoUser);
    $name = ucfirst(strtolower($infoUser["name"]));
    $phone = $infoUser["phone"];

    $lastname = $model->uclast($infoUser["name"]);

    if ($lastname == $name) {
        $lastname = "";
    }
    $address = $infoUser["address"];
    $state = $infoUser["state"];
    $mobile = $infoUser["mobile"];
    $firtsChar = substr($name, 0, 1);

    $corProfile = $model->random_color();

    $userPreff = $model->infoPreferences($mail, $con);
    $userPreff = mysqli_fetch_assoc($userPreff);

    $public_perfil = $userPreff["public_perfil"];
    $contact_mail = $userPreff["contact_mail"];
    $contact_me = $userPreff["contact_me"];
    $social = $userPreff["social"];

    include_once "notify_me.php";

    var_dump($notifications);exit;

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
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        ul.dropdown-cart{
            min-width:250px;
        }
        ul.dropdown-cart li .item{
            display:block;
            padding:3px 10px;
            margin: 3px 0;
        }
        ul.dropdown-cart li .item:hover{
            background-color:#f3f3f3;
        }
        ul.dropdown-cart li .item:after{
            visibility: hidden;
            display: block;
            font-size: 0;
            content: " ";
            clear: both;
            height: 0;
        }

        ul.dropdown-cart li .item-left{
            float:left;
        }
        ul.dropdown-cart li .item-left img,
        ul.dropdown-cart li .item-left span.item-info{
            float:left;
        }
        ul.dropdown-cart li .item-left span.item-info{
            margin-left:10px;
        }
        ul.dropdown-cart li .item-left span.item-info span{
            display:block;
        }
        ul.dropdown-cart li .item-right{
            float:right;
        }
        ul.dropdown-cart li .item-right button{
            margin-top:14px;
        }
    </style>

</head>

<body style="background-image: url('../inc/background.png')">
<nav class="navbar-inverse navbar-static-top">
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
                <li><a href="../actions_login/home.php?mail=<?php echo $mail; ?>">Home</a></li>
                <li><a href="../options_home/about_us.php">Sobre nós</a></li>
                <li><a href="../community/chat.php">Comunidade</a></li>
                <li><a href="contact_us.php">Fale Conosco</a></li>
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
                        <li><a href="../law/my_cases.php">Meus Casos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="../login2.php">Sair</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<br>

    <div class="container">

        <div class="container bootstrap snippet">
            <div class="row">
                <div class="col-sm-10"><h1><?php echo $name; ?></h1></div>
            </div>
            <div class="row">
                <div class="col-sm-4">

                    <div class="text-center">
                        <img src="http://placehold.it/150/<?php echo $corProfile; ?>/fff&amp;text=<?php echo $firtsChar; ?>"
                             class="avatar img-circle img-thumbnail" alt="avatar">
                        <!-- <h6>Upload a different photo...</h6>
                        <input type="file" class="text-center center-block file-upload"> -->
                    </div>
                    </hr><br>

                    <div class="panel panel-default">
                        <div class="panel-heading">Rede Social</div>
                        <div class="panel-body">
                            <a href="<?php echo $social; ?>" target="_blank">LinkedIn</a>
                        </div>
                    </div>

                </div><!--/col-3-->
                <div class="col-sm-8">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Perfil</a></li>
                        <li><a data-toggle="tab" href="#preferences">Preferências</a></li>
                        <li><a data-toggle="tab" href="#notify">Notificações</a></li>
                    </ul>

                    <div class="tab-content">
                        <div class="tab-pane active" id="home">
                            <hr>
                            <form class="form" action="profile.php?apply=true" method="post" id="regForm">
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="first_name"><h4>Primeiro nome</h4></label>
                                        <input type="text" class="form-control" name="first_name" id="first_name"
                                               placeholder="Primeiro nome" title="Digite o seu primeiro nome aqui"
                                               value=<?php echo $name; ?>>
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="last_name"><h4>Último nome</h4></label>
                                        <input type="text" class="form-control" name="last_name" id="last_name"
                                               placeholder="Último nome" title="Digite seu último nome aqui"
                                               value=<?php echo $lastname; ?>>
                                    </div>
                                </div>

                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="phone"><h4>Telefone Residencial</h4></label>
                                        <input type="text" class="form-control" name="phone" id="phone"
                                               placeholder="(XX) XXXX-XXXX" title="Digite seu telefone aqui"
                                               value="<?php echo $phone; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="mobile"><h4>Telefone Celular</h4></label>
                                        <input type="text" class="form-control" name="mobile" id="mobile"
                                               placeholder="(XX) XXXXX-XXXX" title="Digite seu celular aqui"
                                               value="<?php echo $mobile; ?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Email</h4></label>
                                        <input type="email" readonly class="form-control" name="email" id="email"
                                               placeholder="email@email.com" title="Seu email não pode ser alterado"
                                               value="<?php echo $mail ?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="email"><h4>Endereço</h4></label>
                                        <input type="location" class="form-control" id="location" placeholder="Endereço"
                                               title="Digite seu endereço" value="<?php echo $address ?>">
                                    </div>
                                </div>
                                <div class="form-group">

                                    <div class="col-xs-6">
                                        <label for="password"><h4>Senha</h4></label>
                                        <input type="password" class="form-control" name="password" id="password"
                                               placeholder="Senha"
                                               title="Caso queira alterar sua senha, digite a nova aqui">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="password2"><h4>Repita a senha</h4></label>
                                        <input type="password" class="form-control" name="password2" id="password2"
                                               placeholder="Senha" title="Digite novamente sua senha">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success" type="submit"><i
                                                    class="glyphicon glyphicon-ok-sign"></i> Salvar
                                        </button>
                                        <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                            Reset
                                        </button>
                                    </div>
                                </div>
                            </form>

                            <hr>

                        </div><!--/tab-pane-->
                        <div class="tab-pane" id="preferences">
                            <hr>
                            <form class="form" action="##" method="post" id="registrationForm">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="public-perfil" id="public-perfil"
                                               title="Isso permitirá que outros usuários vejam seu perfil"> Tornar perfil
                                        público
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <input type="checkbox" name="contact_pref" id="contact_pref"
                                               title="Isso permitirá contato de outros usuários"> Permitir contato de outros
                                        usuários
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-8">
                                        <label for="socialMidia"><h4>Rede Social</h4></label>
                                        <input type="text" class="form-control" name="social" id="social"
                                               placeholder="Linkedin" title="Coloque aqui o link do seu LinkedIn">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <label for="payMethod"><h4>Forma de Pagamento</h4></label>
                                        <p class="alert alert-warning">Nosso serviço não é cobrado, a forma de pagamento
                                            escolhida é a que será informada ao entrar em contato com os Advogados</p>
                                        <div class="form-group">
                                            <select class="form-control" id="pay">
                                                <option>Selecione uma opção</option>
                                                <option value="1">PayPal</option>
                                                <option value="2">Boleto Bancário</option>
                                                <option value="3">Cartão de Crédito</option>
                                                <option value="4">Cartão de Débito</option>
                                                <option value="5">Dinheiro</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <br>
                                        <button class="btn btn-lg btn-success pull-right" type="submit"><i
                                                    class="glyphicon glyphicon-ok-sign"></i> Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane" id="notify">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Descrição</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>O advogado respondeu a sua solicitação de caso.</td>

                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>Outra notificação</td>

                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>Outra notificação</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
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

