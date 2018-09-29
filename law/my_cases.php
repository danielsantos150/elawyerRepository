<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 14/10/2018
 * Time: 16:49
 */
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
                <li><a href="../options_home/contact_us.php">Fale Conosco</a></li>
                <li class="dropdown active">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Minha Área <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="../options_home/profile.php">Meu Perfil</a></li>
                        <li><a href="my_cases.php">Meus Casos</a></li>
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
<form id="form_contact" method="POST">
    <div class="container">
        <h3>Meus Casos Jurídicos!</h3>
        <br>
        <div class="text-right">
            <button type="button" class="btn btn-primary" style="border: 0px; background-color: #00CC00;"
                    data-toggle="modal" data-target="#modalNewCase"><span class="glyphicon glyphicon-plus"></span>&nbsp;&nbsp;Cadastrar
                Caso
            </button>
        </div>
        <br>
        <table id="mytable" class="table table-bordred table-striped">
            <thead>
            <th>Identificador</th>
            <th>Solicitante</th>
            <th>Advogado Responsável</th>
            <th>Andamento</th>
            <th>Status</th>
            <th>Última Atualização</th>
            <th>Info</th>
            <th>Encerrar</th>
            </thead>
            <tbody>
            <tr>
                <td>#3246731</td>
                <td>Daniel Santos</td>
                <td>Fernanda Maia</td>
                <td>Em análise pelo Advogado Responsável</td>
                <td>Ativado</td>
                <td>25/09/2018</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalOne">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalClose">
                        <span class="glyphicon glyphicon-ban-circle"></span></button>
                </td>
            </tr>
            <tr>
                <td>#3299302</td>
                <td>Daniel Santos</td>
                <td>Fernanda Maia</td>
                <td>Aguardando aceite pelo Advogado</td>
                <td>Ativado</td>
                <td>-</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalOne">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalClose">
                        <span class="glyphicon glyphicon-ban-circle"></span></button>
                </td>
            </tr>
            <tr>
                <td>#3303887</td>
                <td>Daniel Santos</td>
                <td>Fernando Junior</td>
                <td>Retorno com aval do Advogado</td>
                <td>Ativado</td>
                <td>27/09/2018</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalOne">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalClose">
                        <span class="glyphicon glyphicon-ban-circle"></span></button>
                </td>
            </tr>
            <tr>
                <td>#3329910</td>
                <td>Daniel Santos</td>
                <td>Fernando Junior</td>
                <td title="O caso foi rejeitado, mas o Advogado cadastrou um parecer">Caso rejeitado pelo Advogado (c/
                    Parecer)
                </td>
                <td>Inativo</td>
                <td>01/10/2018</td>
                <td>
                    <button type="button" class="btn btn-primary btn-xs" data-toggle="modal" data-target="#modalOne">
                        <span class="glyphicon glyphicon-pencil"></span></button>
                </td>
                <td>
                    <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#modalClose">
                        <span class="glyphicon glyphicon-ban-circle"></span></button>
                </td>
            </tr>
            </tbody>
        </table>

    </div>
    <!--<div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>Meus Casos Jurídicos!</h3>
                <br>
                <div class="table-responsive">
                    <table id="mytable" class="table table-bordred table-striped">
                        <thead>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Email</th>
                            <th>Contact</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#modalOne" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                            <tr>
                                <td>Mohsin</td>
                                <td>Irshad</td>
                                <td>CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan</td>
                                <td>isometric.mohsin@gmail.com</td>
                                <td>+923335586757</td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
                                <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="clearfix"></div>
                    <!--<ul class="pagination pull-right">
                        <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>-->
</form>

<!-- Modal -->
<div class="modal fade" id="modalOne" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Caso nº.: 3246731</h4>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <p>Informações do Caso</p>
                    <textarea class="form-control" rows="5" id="comment"
                              placeholder="Digite aqui informações básicas para ser enviada ao advogado"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button id="btnSave" type="button" class="btn btn-success" onclick="#/*metodo para salvar info*/#"
                        data-dismiss="modal">Salvar
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalClose" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Caso nº.: 3246731</h4>
            </div>
            <div class="modal-body">
                <div class="alert alert-danger"><span class="glyphicon glyphicon-warning-sign"></span> Você tem certeza
                    que deseja fechar o seu caso? Casos fechados não podem ser reabertos.
                </div>
            </div>
            <div class="modal-footer ">
                <button type="button" class="btn btn-success" data-dismiss="modal"><span
                            class="glyphicon glyphicon-ok-sign" onclick="#/*metodo para salvar info*/#"></span> Sim
                </button>
                <button type="button" class="btn btn-default" data-dismiss="modal"><span
                            class="glyphicon glyphicon-remove"></span> Não
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modalNewCase" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Cadastrar um Novo Caso</h4>
            </div>
            <div class="modal-body col-md-12">
                <div class="form-group col-md-6">
                    <label for="inputLaw">Advogado</label>
                    <select id="inputLaw" name="inputLaw" class="form-control">
                        <option selected>Selecione...</option>
                        <option value="FM">Fernanda Maia</option>
                        <option value="FJ">Fernando Junior</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputStatus">Status</label>
                    <select id="inputStatus" name="inputStatus" class="form-control">
                        <option value=1>Ativo</option>
                        <option value=0>Inativo</option>
                    </select>
                </div>
                <div class="form-group col-md-10">
                    <label for="inputLaw">Descrição</label>
                    <textarea rows="2" class="form-control" placeholder="Digite aqui a descrição"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal"><span
                            class="glyphicon glyphicon-ok-sign" onclick="#/*metodo para salvar info*/#"></span>&nbsp;&nbsp;Cadastrar
                </button>
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
