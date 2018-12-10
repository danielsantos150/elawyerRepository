<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09/12/2018
 * Time: 19:58
 */
    include_once("../connections/conection.php");
    include_once("../connections/Model.php");

    if (!isset($_SESSION)) {
        session_start();
    }

    $model = new Model();

    $resultAdvogados = $model->buscaAdvogados($con);
    $numRow = mysqli_num_rows($resultAdvogados);
    $advogadosOptions = "";

    $resultNome = $model->takeName($_SESSION["usuario"], $con);
    $nomeUsuario = mysqli_fetch_assoc($resultNome);
    $nomeUsuario = $nomeUsuario["name"];

    $resultCases = $model->buscaMeusCasos($con, $nomeUsuario);
    $nRow = mysqli_num_rows($resultCases);

    $my_cases = "<thead>
                    <th>Solicitante</th>
                    <th>Advogado Responsável</th>
                    <th>Descrição</th>
                    <th>Última Atualização</th>
                    <th>Enviar Atualização</th>
                    <th>Encerrar</th>
                    </thead>
                    <tbody>";
    $modalAtualiza = "";
    $modelEncerra = "";


    for ($i = 1; $i <= $nRow; $i++) {

        $linha = mysqli_fetch_assoc($resultCases);
        $my_cases .= "<tr>
                            <td>".$linha["client"]."</td>
                            <td>".$linha["law"]."</td>
                            <td>".$linha["describe"]."</td>
                            <td>".$linha["date"]."</td>
                            <td>
                                <button style='margin-left: 50px;' type=\"button\" class=\"btn btn-primary btn-xs\" data-toggle=\"modal\" data-target=\"#modalOne\">
                                    <span class=\"glyphicon glyphicon-send\"></span></button>
                            </td>
                            <td>
                                <button style='margin-left: 20px;' type=\"button\" class=\"btn btn-danger btn-xs\" data-toggle=\"modal\" data-target=\"#modalClose\">
                                    <span class=\"glyphicon glyphicon-ban-circle\"></span></button>
                            </td>
                        </tr>";

        $modalAtualiza.= "<!-- Modal -->
                        <div class=\"modal fade\" id=\"modalOne\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                        <h4 class=\"modal-title\">Atualizar a descrição do caso</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <form class=\"form\" id=\"form1\" name=\"form1\" method=\"POST\" action=# autocomplete=\"off\">
                                            <div class=\"form-group\">
                                                <p>Descrição do Caso</p>
                                                <textarea class=\"form-control\" rows=\"5\" id=\"comment\" name=\"comment\"
                                                          placeholder=\"Digite aqui informações básicas para ser enviada ao advogado\"></textarea>
                                                <input type=\"hidden\" name=\"idCaso\" id=\"idCaso\" value='".$linha["id_case"]."'>
                                            </div>
                                            <button id=\"btnSave\" type=\"submit\" class=\"btn btn-success\">Salvar
                                        </button>
                                        </form>
                                    </div>                                    
                                </div>
                            </div>
                        </div>";

        $modelEncerra.="<div class=\"modal fade\" id=\"modalClose\" role=\"dialog\">
                            <div class=\"modal-dialog\">
                                <div class=\"modal-content\">
                                    <div class=\"modal-header\">
                                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                                        <h4 class=\"modal-title\">Encerrar Caso</h4>
                                    </div>
                                    <div class=\"modal-body\">
                                        <form class=\"form\" id=\"form1\" name=\"form1\" method=\"POST\" action=# autocomplete=\"off\">
                                            <div class=\"alert alert-danger\"><span class=\"glyphicon glyphicon-warning-sign\"></span> Você tem certeza
                                                que deseja fechar o seu caso? Casos fechados não podem ser reabertos.
                                            </div>
                                            <input type=\"hidden\" name=\"close\" id=\"close\" value='".$linha["id_case"]."'>                                    
                                            <button type=\"submit\" class=\"btn btn-success\"><span
                                                            class=\"glyphicon glyphicon-ok-sign\"></span> Sim</button>
                                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\"><span
                                                            class=\"glyphicon glyphicon-remove\"></span> Não</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>";
    }

    $my_cases.= "</tbody>";

    for ($i = 1; $i <= $numRow; $i++){

        $linha = mysqli_fetch_assoc($resultAdvogados);

        $advogadosOptions.= "<option value='".$linha["name"]."'>".$linha["name"]."</option>";
    }
