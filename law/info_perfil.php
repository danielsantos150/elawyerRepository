<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09/11/2018
 * Time: 21:23
 */
    $infoAdvogado = array();
    $telefone = "";
    $celular = "";
    $emailAd = "";
    include_once "operations_info_perfil.php";

    $telefone = $infoAdvogado["phone"];
    $celular = $infoAdvogado["mobile"];
    $emailAd = $infoAdvogado["email"];

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
                                           value="'.$telefone.'"
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="mobile"><h5>Telefone Celular</h5></label>
                                    <input type="text" readonly class="form-control" name="mobile" id="mobile"
                                           placeholder="(XX) XXXXX-XXXX" title="Digite seu celular aqui"
                                           value="'.$celular.'"
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-xs-6">
                                    <label for="email"><h5>Email</h5></label>
                                    <input type="email" readonly class="form-control" name="email" id="email"
                                           placeholder="email@email.com" title="Seu email não pode ser alterado"
                                           value="'.$emailAd.'"
                                </div>
                            </div>
                                                      
                        </div>';
    }elseif ($menu == 2){
        $info_Perfil = $casosAdvogado;
    }elseif ($menu == 3) {
        $info_Perfil = $mensagem;
    }