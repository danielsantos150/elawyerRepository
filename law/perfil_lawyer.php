<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 04/11/2018
 * Time: 22:35
 */
include_once "../nav.php";

//include_once "info_perfil.php"
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
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

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
        <link rel="stylesheet" href="../inc/style.css" >
    </head>
    <body>
        <?php echo $nav;?>
        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">

                        <div class="profile-userpic">
                            <img src="https://static.change.org/profile-img/default-user-profile.svg" class="img-responsive" alt="">
                        </div>

                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Usuario
                            </div>
                            <div class="profile-usertitle-job">
                                Advogado
                            </div>
                        </div>

                        <div class="profile-userbuttons">
                            <button type="button" class="btn btn-success btn-sm">Follow</button>
                            <button type="button" class="btn btn-danger btn-sm">Message</button>
                        </div>

                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li id=info class="active">
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
                            echo '<div class="profile-content">
                                    CASE 1
                                    </div>';
                        }elseif ($_GET["type"] == 2){
                            echo '<div class="profile-content">
                                    CASE 2
                                    </div>';
                        }elseif ($_GET["type"] == 3){
                            echo '<div class="profile-content">
                                    CASE 3
                                    </div>';
                        }
                    }?>
                </div>
            </div>
        </div>
        <p class="text-center">
            <strong>Powered by <a href="" target="_blank"></a></strong>
        </p>
    </body>
</html>

