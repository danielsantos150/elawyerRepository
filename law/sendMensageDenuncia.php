<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 13/12/2018
 * Time: 18:54
 */
if(!isset($_SESSION)){
    session_start(); # verificar redirecionamento para a tela de login....
}

include_once("../connections/conection.php");
include_once("../connections/Model.php");

$resultUsuario = $model->infoUser($_SESSION["usuario"], $con);
$nomeUsuario = mysqli_fetch_assoc($resultUsuario);
$nomeSend = $nomeUsuario["name"];

$nome = $_SESSION["nome"];

$val = $model->insereInteresse($con, $nomeSend, $nome, "Estou te enviando um alerta de denúncia sobre antiética");


