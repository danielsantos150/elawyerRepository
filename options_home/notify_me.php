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

    var_dump($_SESSION);exit;

    $notifications = "<table class=\"table table-striped\">
                                <thead>
                                <tr>
                                    <th scope=\"col\">#</th>
                                    <th scope=\"col\">Descrição</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=\"row\">1</th>
                                    <td>O advogado respondeu a sua solicitação de caso.</td>

                                </tr>
                                <tr>
                                    <th scope=\"row\">2</th>
                                    <td>Outra notificação</td>

                                </tr>
                                <tr>
                                    <th scope=\"row\">3</th>
                                    <td>Outra notificação</td>
                                </tr>
                                </tbody>
                            </table>";