<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 09/11/2018
 * Time: 21:01
 */


$nav = '<nav class="navbar-inverse navbar-static-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">E-LAWYER</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="../actions_login/home.php">Home</a></li>
                    <li><a href="../options_home/about_us.php">Sobre nós</a></li>
                    <li><a href="../community/chat.php">Comunidade</a></li>
                    <li><a href="../options_home/contact_us.php">Fale Conosco</a></li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Jurídico <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../law/lawyers.php">Advogados</a></li>                            
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Minha Área <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="../options_home/profile.php">Meu Perfil</a></li>
                            <li><a href="../law/my_cases.php">Meus Casos</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="../login2.php">Sair</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>';