<?php
    include_once("../connections/conection.php");
    include("../connections/Model.php");

    if (!isset($_SESSION)) {
        session_start();
    }

    $model = new Model();

    $mail = $_SESSION['usuario'];
    $usu = $model->takeName($mail, $con);
    $usu = mysqli_fetch_array($usu);
    if(is_null($usu["name"])){
        $model->regist_chat("FREE", $con);
        $eFREE = TRUE;
    }else{
        $model->regist_chat($usu["name"], $con);
    }
    $valores = $model->mostraChat($con);

    $num_row = mysqli_num_rows($valores);
    $mensagem = "";

    for ($i = 1; $i <= $num_row; $i++) {

        $linha = mysqli_fetch_assoc($valores);

        $mensagem .= "<li class='right clearfix'><span class='chat-img pull-right'>
                            
                        </span>
                            <div class='chat-body clearfix'>
                                <div class='header'>
                                    <small class='pull-right text-muted'><span class='glyphicon glyphicon-time'></span>";
        $mensagem .= $linha["date_msg"];
        $mensagem .= "</small><br>
                                    <strong class='pull-right primary-font'>";
        $mensagem .= $linha["users"];
        $mensagem .= "</strong>
                                </div>
                                <p>";
        $mensagem .= $linha["mensage"];
        $mensagem .= "</p>
                            </div>";
    }

    if (isset($_POST['MSG'])) {

        $mensg = $_POST['MSG'];

        if ($mensg != "") {

            $mail = $_SESSION['usuario'];

            $usu = $model->takeName($mail, $con);
            $usu = mysqli_fetch_assoc($usu);

            $model->insereMensagem($mensg, $usu["name"], $con);
            if($eFREE == TRUE){
                header("Location: home_free.php");
            }else{
                header("Location: chat.php");
            }
        } else {
            if($eFREE == TRUE){
                header("Location: home_free.php");
            }else{
                header("Location: chat.php");
            }
        }

    }
