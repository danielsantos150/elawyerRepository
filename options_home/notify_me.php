<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 08/12/2018
 * Time: 21:24
 */

    include_once "../connections/conection.php";
    include_once "../connections/Model.php";

    if (!isset($_SESSION)) {
        session_start();
    }

    $model = new Model();

    $emailUsuario = $_SESSION["usuario"];

    $resultNotify = $model->buscaNotificacoes($con, $emailUsuario);

    $num_row = mysqli_num_rows($resultNotify);

    $notifications = "<table class=\"table table-striped\">
                                    <thead>
                                    <tr>
                                        <th scope=\"col\">#</th>
                                        <th scope=\"col\">De</th>
                                        <th scope=\"col\">Descrição</th>                                        
                                    </tr>
                                    </thead><tbody>";

    for ($i = 1; $i <= $num_row; $i++) {

        $linha = mysqli_fetch_assoc($resultNotify);

        $notifications.="<tr>
                            <th scope=row>".$i."</th>
                            <td>".$linha["user_send"]."</td>
                            <td>".$linha["mensage"]."</td>                            
                         </tr>";

    }
    $notifications.= "</tbody></table>";