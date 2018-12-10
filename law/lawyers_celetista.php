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

<body style="background-image: url('../inc/background.png')">
<?php echo $nav2;?>


<div class="container search-table" style="margin-top: 60px;">

    <div class="search-box">
        <div class="row">
            <div class="col-md-3">
                <h5>Pesquisar Advogados da Plataforma</h5>
            </div>
            <div class="col-md-9">
                <input type="text" id="myInput" onkeyup="myFunction()" class="form-control" placeholder="Digite o nome para pesquisar"
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
            <?php echo $advogados; ?>
            </tbody>
        </table>
    </div>
</div>
<script>window.jQuery || document.write('<script src="../bootstrap/assets/js/vendor/jquery.min.js"><\/script>')</script>

</body>
</html>

