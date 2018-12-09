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

    $mail = $_SESSION['emailAdvogado'];
    $valores = $model->mostraAvaliacoes($con, $mail);
    $num_row = mysqli_num_rows($valores);

    $advogado = $_SESSION["nome"];

    $infoAd = $model->buscaInfoAdvogado($con, $advogado);
    $infoAdvogado = mysqli_fetch_assoc($infoAd);

    $mensagem = "<div class=\"profile-content\">";

    if($num_row == 0){
        $mensagem = "<div class=\"profile-content1\">";
        $mensagem.= "<p style='text-align: center; margin-top: 10px;'>Advogado sem avaliações cadastradas no sistema, seja o primeiro a avaliá-lo!</p>
                                </div>";
    }else{
        $mensagem = "<div class=\"profile-content2\">";
        for ($i = 1; $i <= $num_row; $i++) {

            $linha = mysqli_fetch_assoc($valores);
            $mensagem .= "<div class=\"messaging\">
                                <div class=\"incoming_msg\">
                                    <p><div class=\"incoming_msg_img\">
                                        <img src=\"https://ptetutorials.com/images/user-profile.png\" alt=\"sunil\">
                                            </div>&nbsp;&nbsp;";
            $mensagem .= $linha["comment"];
            $mensagem .= "</p></div><p style='text-align: right;'><span class=\"time_date\" style='width: 500px;'>".$linha['data'].'&nbsp;|&nbsp;'.$linha['cliente']."</span></p>";

        }
        $mensagem .= "</div></div></div>";
    }

    $infoCasos = $model->buscaCasosAdvogado($con, $advogado);
    $nRow = mysqli_num_rows($infoCasos);

    $casosAdvogado = "<div class=\"profile-content\">
                            <table id=\"mytable\" class=\"table table-bordred table-striped\">
                                <thead>
                                <th>Identificador</th>
                                <th>Solicitante</th>
                                <th>Descrição</th>
                                <th>Data</th>
                                </thead>
                                <tbody>";

    for ($i = 1; $i <= $nRow; $i++) {

        $linha1 = mysqli_fetch_assoc($infoCasos);
        $casosAdvogado .= "<tr>
                            <td>".$linha1["id_case"]."</td>
                            <td>".$linha1["client"]."</td>
                            <td>".$linha1["describe"]."</td>
                            <td>".$linha1["date"]."</td>                
                           </tr>";
    }

        $casosAdvogado .= "</tbody>
                            </table>
                        </div>";
