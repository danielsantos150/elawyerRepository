<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09/11/2018
 * Time: 21:23
 */

    include_once "operations_info_perfil.php";

    $menu = 1;

    if(isset($_GET["type"])){
        $menu = $_GET["type"];
    }


    if($menu == 1){
        $info_Perfil = '<div class="profile-content">                                    
                            <div class="form-group">
                                <div class="col-xs-12">                                    
                                    <label for="first_name"><h5>Nome</h5></label>
                                    <input type="text" readonly class="form-control" name="first_name" id="first_name"
                                           placeholder="Primeiro nome" title="Digite o seu primeiro nome aqui"
                                           value="' . $nome . '"
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="phone"><h5>Telefone Residencial</h5></label>
                                    <input type="text" readonly class="form-control" name="phone" id="phone"
                                           placeholder="(XX) XXXX-XXXX" title="Digite seu telefone aqui"
                                           value=""
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h5>Telefone Celular</h5></label>
                                    <input type="text" readonly class="form-control" name="mobile" id="mobile"
                                           placeholder="(XX) XXXXX-XXXX" title="Digite seu celular aqui"
                                           value=""
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h5>Email</h5></label>
                                    <input type="email" readonly class="form-control" name="email" id="email"
                                           placeholder="email@email.com" title="Seu email não pode ser alterado"
                                           value=""
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h5>Escritório</h5></label>
                                    <input type="text" readonly class="form-control" name="place" id="place"
                                           value="Escritório"
                                </div>
                            </div>                            
                        </div>';
    }elseif ($menu == 2){
        $info_Perfil = '<div class="profile-content">
                            <table id="mytable" class="table table-bordred table-striped">
            <thead>
            <th>Identificador</th>
            <th>Solicitante</th>
            <th>Andamento</th>
            <th>Última Atualização</th>
            </thead>
            <tbody>
            <tr>
                <td>#3246731</td>
                <td>Daniel Santos</td>
                <td>Sua análise está em andamento</td>
                <td>25/09/2018</td>                
            </tr>
            <tr>
                <td>#3303887</td>
                <td>Daniel Santos</td>
                <td>Retorno enviado com sucesso</td>
                <td>27/09/2018</td>                
            </tr>
            <tr>
                <td>#3329910</td>
                <td>Daniel Santos</td>
                <td title="O caso foi rejeitado, mas o Advogado cadastrou um parecer">Caso rejeitado pelo Advogado (c/
                    Parecer)
                </td>
                <td>01/10/2018</td>
            </tr>
            </tbody>
        </table>
                        </div>';
    }elseif ($menu == 3) {
        $info_Perfil = $mensagem;
    }