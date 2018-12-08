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

    $resultUsuario = $model->infoUser($_SESSION["usuario"], $con);
    $nomeUsuario = mysqli_fetch_assoc($resultUsuario);
    $nomeSend = $nomeUsuario["name"];

    $nome = $_SESSION["nome"];

    $val = $model->insereInteresse($con, $nomeSend, $nome, "Estou com interesse em conversar com você, segue meu telefone ".$nomeUsuario["phone"]);



