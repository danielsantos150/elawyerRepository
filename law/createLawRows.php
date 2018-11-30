<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09/11/2018
 * Time: 19:35
 */
    include "../connections/conection.php";
    include_once "../connections/Model.php";

    $model = new Model();

    $valores = $model->searchLaw($con);
    $num_row = mysqli_num_rows($valores);
    $advogados = "";

    for ($i = 1; $i <= $num_row; $i++) {

        $linha = mysqli_fetch_assoc($valores);

        $advogados .= '<tr>
                <td class="col-md-2">'.$linha["nome"].'</td>
                <td class="col-md-9">'.$linha["resumo"].'</td>
                <td class="text-center col-md-1">
                    <button type="button" class="btn btn-primary btn-sm" style="background-color: #8a6d3b;border: 0px;"  onclick="window.location.href = \'perfil_lawyer.php?name='.$linha["nome"].'\'" >
                        <span class="glyphicon glyphicon-user"></span></button>
                </td>
            </tr>';

    }