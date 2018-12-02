<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 30/11/2018
 * Time: 22:10
 */

    if(!isset($_SESSION)){
        session_start(); # verificar redirecionamento para a tela de login....
    }
    include_once("../connections/conection.php");
    include_once("../connections/Model.php");

    $val = $model->insereInteresse($con, $nome);

?>

