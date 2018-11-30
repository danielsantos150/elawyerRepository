<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 30/11/2018
 * Time: 20:29
 */
include_once("../connections/conection.php");
include_once("../connections/Model.php");

if (!isset($_SESSION)) {
    session_start();
}

$model = new Model();

$mail = $_SESSION['usuario'];
$valores = $model->mostraAvaliacoes($con, $mail);
$num_row = mysqli_num_rows($valores);
$mensagem = "<div class=\"profile-content\">";

for ($i = 1; $i <= $num_row; $i++) {

    $linha = mysqli_fetch_assoc($valores);
    //var_dump($linha);exit;
    $mensagem .= "
                    <div class=\"messaging\">
                        <div class=\"incoming_msg\">
                            <p><div class=\"incoming_msg_img\">
                                <img src=\"https://ptetutorials.com/images/user-profile.png\" alt=\"sunil\">
                                    </div>&nbsp;&nbsp;&nbsp;";
    $mensagem .= $linha["comment"];
    $mensagem .= "</p></div><p style='text-align: right;'><span class=\"time_date\" style='width: 500px;'>".$linha['data'].'&nbsp;|&nbsp;'.$linha['cliente']."</span></p>";

}
$mensagem .= "</div></div></div>";







