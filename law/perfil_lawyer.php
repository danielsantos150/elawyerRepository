<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04/11/2018
 * Time: 22:35
 */
    session_start();
    include_once "../nav.php";
    include_once "../connections/conection.php";
    include_once "../connections/Model.php";

    $model = new Model();

    $nome = "";
    if (isset($_GET["name"])) {
        $_SESSION["nome"] = $_GET["name"];
    }
    $nome = $_SESSION["nome"];

    $rank = $model->buscaRank($con, $nome);
    $dados = mysqli_fetch_assoc($rank);
    $nome = $dados["name"];
    $rank = $dados["rank"];

    if($rank == 1){
        $rank = "RANK S";
    }else{
        $rank = "RANK 1";
    }

    include_once "info_perfil.php";

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

        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="../inc/style_law.css" >

        <link rel="stylesheet" href="../inc/style.css" >

        <script>
            function demonstraInteresse(e, elem) {
                document.getElementById(e).style.display = "";
                document.getElementById('denuncia').style.display = "none";
                <?php include_once "sendMensage.php"; ?>
            }
            function enviaDenuncia(e, elem) {
                document.getElementById(e).style.display = "";
                document.getElementById('sucesso').style.display = "none";
            }
        </script>

    </head>
    <body style="background-image: url('../inc/background.png');">
        <?php echo $nav;?>
        <div class="container">
            <div id="sucesso" class="alert alert-success" role="alert" style="margin-top: 20px;display: none" >
                Encaminhado a notificação de interesse para o advogado!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div id="denuncia" class="alert alert-danger" role="alert" style="margin-top: 20px;display: none" >
                Notificação de denúncia enviada para os administradores do sistema!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <!-- Adicionar as inicais do nome do advogado -->
                        <div class="profile-userpic">
                            <img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                <?php echo $nome; ?>
                            </div>
                            <div class="profile-usertitle-job">
                                Advogado
                            </div>
                            <button type="button" class="btn btn-default" data-toggle="modal" data-target=".bd-example-modal-sm">
                                <?php echo $rank; ?>
                            </button>
                        </div>
                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm" title="Demonstrar interesse" onclick="demonstraInteresse('sucesso', '<?php echo $nome; ?>')">
                                Interesse
                            </button>
                            <button type="button" class="btn btn-danger btn-sm" onclick="enviaDenuncia('denuncia', '<?php echo $nome; ?>')">Denunciar</button>
                        </div>
                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li id=info>
                                    <a href="?type=1">
                                        <i class="glyphicon glyphicon-user"></i>
                                        Informações Gerais </a>
                                </li>
                                <li>
                                    <a href="?type=2">
                                        <i class="glyphicon glyphicon-th-list"></i>
                                        Casos Jurídicos </a>
                                </li>
                                <li>
                                    <a href="?type=3">
                                        <i class="glyphicon glyphicon-ok"></i>
                                        Avaliações </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php if(isset($_GET["type"])){
                        if($_GET["type"] == 1){
                            echo $info_Perfil;
                        }elseif ($_GET["type"] == 2){
                            echo $info_Perfil;
                        }elseif ($_GET["type"] == 3){
                            echo $info_Perfil;
                        }
                    }?>
                </div>
            </div>
        </div>
        <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">RANK's</h4>
                    </div>
                    <div class="modal-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">Colocação</th>
                                <th scope="col">Tipos</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">#1</th>
                                <td>RANK S+</td>
                            </tr>
                            <tr>
                                <th scope="row">#2</th>
                                <td>RANK S</td>
                            </tr>
                            <tr>
                                <th scope="row">#3</th>
                                <td>INICIANTE</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

