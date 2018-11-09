<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09/11/2018
 * Time: 21:23
 */

    $menu = 1;

    if(isset($_GET["type"])){
        $menu = $_GET["type"];
    }


    if($menu == 1){
        $info_Perfil = '<div class="profile-content">
                            CASE 1
                        </div>';
    }elseif ($menu == 2){
        $info_Perfil = '<div class="profile-content">
                            CASE 2
                        </div>';
    }elseif ($menu == 3) {
        $info_Perfil = '<div class="profile-content">
                            CASE 3
                        </div>';
    }