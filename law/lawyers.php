<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04/11/2018
 * Time: 20:37
 */
    include "createLawRows.php";
    include_once "../js/scripts.php";
    include_once "../nav.php";
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

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="../bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>

    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#myInput").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
</head>

<body>
    <!--<nav class="navbar navbar-inverse">
        <div class="container-fluid">
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
                    <li><a href="../actions_login/home.php">Home</a></li>
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
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../login2.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
                </ul>
            </div>
        </div>
    </nav>-->
    <?php echo $nav;?>

<div class="container search-table">

    <div class="search-box">
        <div class="row">
            <div class="col-md-3">
                <h5>Pesquisar Advogados da Plataforma</h5>
            </div>
            <div class="col-md-9">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Pesquisar"
                       title="Digite aqui o nome do advogado">

            </div>
        </div>
    </div>
    <div class="search-list">
        <h3>Advogados Cadastrados</h3>
        <table class="table" id="myTable">
            <thead>
            <tr>
                <th class="col-md-2">Nome</th>
                <th class="col-md-9">Atuações</th>
                <th class="col-md-1 text-center">Perfil</th>
            </tr>
            </thead>
            <tbody>
            <!--<tr>
                <td class="col-md-2">Fernanda Maia</td>
                <td class="col-md-9">Procuradora Municipal em Belo Horizonte/MG; Consultora Jurídico</td>
                <td class="text-center col-md-1">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalInfo">
                        <span class="glyphicon glyphicon-search"></span></button>
                </td>
            </tr>
            <tr>
                <td class="col-md-2">Fernando Junior</td>
                <td class="col-md-9">Procurador Municipal em Belo Horizonte/MG; Consultor Jurídico; Empresário do
                    Mercado Imobiliário; Corretor de Imóveis
                </td>
                <td class="text-center col-md-1">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalInfo">
                        <span class="glyphicon glyphicon-search"></span></button>
                </td>
            </tr>
            <tr>
                <td class="col-md-2">Raimundo Reis</td>
                <td class="col-md-9">Direito Imobiliário e Registral, assessorando investidores, famílias, bancos,
                    empresas loteadoreas e incorporadoras, acumulou vasta experiência em questões jurídico-patrimoniais,
                    e hoje atua como conselheiro.
                </td>
                <td class="text-center col-md-1">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalInfo">
                        <span class="glyphicon glyphicon-search"></span></button>
                </td>
            </tr>
            <tr>
                <td class="col-md-2">Eduardo Reis</td>
                <td class="col-md-9">Advogado com larga experiência em questões sucessórias e divisórias envolvendo bens
                    imóveis e na assessoria a empreendedores imobiliários, incorporadores e loteadores.
                </td>
                <td class="text-center col-md-1">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalInfo">
                        <span class="glyphicon glyphicon-search"></span></button>
                </td>
            </tr>
            <tr>
                <td class="col-md-2">Caio da Costa</td>
                <td class="col-md-9">Área cível em geral e imobiliária, especialmente contratos imobiliários,
                    regularização de imóveis, procedimentos administrativos e judiciais envolvendo parcelamento do solo
                    e edificações, procedimentos de usucapião judicial e extrajudicial e partilhas envolvendo imóveis
                </td>
                <td class="text-center col-md-1">
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalInfo">
                        <span class="glyphicon glyphicon-search"></span></button>
                </td>
            </tr>-->
            <?php echo $advogados; ?>
            </tbody>
        </table>
    </div>
</div>

    <div class="modal fade" id="modalInfo" role="dialog">
        <div class="modal-dialog">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Informações do Advogado</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3 col-lg-3 hidden-xs hidden-sm">
                                <img class="img-circle"
                                     src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=100"
                                     alt="User Pic">
                            </div>
                            <div class=" col-md-9 col-lg-9 hidden-xs hidden-sm">
                                <strong>Nome Advogado</strong><br>
                                <table class="table table-user-information">
                                    <tbody>
                                    <tr>
                                        <td>Idade</td>
                                        <td>34</td>
                                    </tr>
                                    <tr>
                                        <td>Data de Registro:</td>
                                        <td>11/12/2013</td>
                                    </tr>
                                    <tr>
                                        <td>Casos Atribuidos</td>
                                        <td>15</td>
                                    </tr>
                                    <tr>
                                        <td>Reclamações</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Classificação</td>
                                        <td>
                                            <button type="text" class="btn btn-default btn-xs" disabled="disabled">Rank 1
                                            </button>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <button class="btn btn-sm btn-primary" type="button"
                                data-toggle="tooltip"
                                title="Visitar Perfil"><i class="glyphicon glyphicon-user"
                                                          onclick="window.location.href = 'perfil_lawyer.php?name=Daniel'"></i>
                        </button>
                        <span class="pull-right">
                                <button class="btn btn-sm btn-primary" type="button"
                                        data-toggle="tooltip"
                                        title="Demonstrar interesse"><i class="glyphicon glyphicon-send"></i></button>
                                <button class="btn btn-sm btn-danger" type="button"
                                        data-toggle="tooltip"
                                        title="Fechar" data-dismiss="modal"><i
                                            class="glyphicon glyphicon-remove"></i></button>
                            </span>
                    </div>
                </div>
            </div>
        </div>
    </div>


<script>window.jQuery || document.write('<script src="../bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>

</body>
</html>

