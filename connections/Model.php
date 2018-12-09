<?php

    class Model
    {
        function select_user($user, $password, $con){

            try{

                $hash = hash('sha256', $password);

                $hash = substr($hash, 0, 20);

                $query = "SELECT user, email, pass 
                        FROM database_lawyer.users 
                        WHERE email = '$user' 
                        AND pass = '$hash';";

                //$stmt = $con->prepare($query);
                $stmt = mysqli_query($con, $query);
                //$result = $stmt->execute();

                return $stmt;

            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function regist_user($email, $password, $address, $city, $perf, $name, $con){

            try{

                $hash = hash('sha256', $password);

                $hash = substr($hash, 0, 20);

                $query = "INSERT INTO `database_lawyer`.`users`
                        (`id_users`,`user`,`pass`,`email`,`dtRegister`, type_user, name)
                        VALUES
                        (1,'$email','$hash',
                        '$email',now(), '$perf', '$name');";

                $stmt = mysqli_query($con, $query);

                return 1;
            }catch (Exception $exception){
                return $exception;exit;
            }

        }

        function reset_password($email, $con){

            try{

                $newPassword = rand(10000000, 99999999);

                $hash = hash('sha256', $newPassword);

                $hash = substr($hash, 0, 20);

                $query = "UPDATE database_lawyer.users
                            SET pass = '$hash'
                            WHERE email = '$email'";

                $stmt = mysqli_query($con, $query);


                return $hash;

            }catch (Exception $exception){
                return $exception;exit;
            }

        }

        function mostraChat($con){

            $query = "SELECT users, mensage, date_format(date_msg, '%H:%m:%i') as date_msg 
                      FROM database_lawyer.chat
                      WHERE mensage != ''
                      ORDER BY date_msg DESC";

            $stmt = mysqli_query($con, $query);

            return $stmt;
        }

        function insereMensagem($msg, $usu, $con){

            try{
                $query = "INSERT INTO `database_lawyer`.`chat`(`users`,`mensage`,`date_msg`)
                    VALUES ('$usu','$msg',now());";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }

        }

        function takeName($email, $con){

            try{

                $query = "SELECT name
                        FROM database_lawyer.users 
                        WHERE email = '$email';";

                //$stmt = $con->prepare($query);
                $stmt = mysqli_query($con, $query);
                //$result = $stmt->execute();

                return $stmt;

            }catch (Exception $exception){
                return $exception;exit;
            }

        }

        function regist_chat($usu, $con){

            try{
                $query = "INSERT INTO database_lawyer.users_chat (`users`, `date_login`)
                            VALUES ('$usu',now());";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }

        }

        function users_online($con){
            try{
                $query = "SELECT DISTINCT users
                           FROM database_lawyer.users_chat
                           WHERE users != '';";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function infoUser($mail, $con){

            try{

                $query = "SELECT user, email, phone, name, address, state, mobile
                        FROM database_lawyer.users 
                        WHERE email = '$mail'";

                //$stmt = $con->prepare($query);
                $stmt = mysqli_query($con, $query);
                //$result = $stmt->execute();

                return $stmt;

            }catch (Exception $exception){
                return $exception;exit;
            }

        }

        function infoPreferences($mail, $con){

            try{

                $query = "SELECT mail, public_perfil, contact_mail, contact_me, social
                        FROM database_lawyer.preferences 
                        WHERE mail = '$mail'";

                //$stmt = $con->prepare($query);
                $stmt = mysqli_query($con, $query);
                //$result = $stmt->execute();

                return $stmt;

            }catch (Exception $exception){
                return $exception;exit;
            }

        }

        function random_color_part() {
            return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
        }

        function random_color() {
            return $this::random_color_part() . $this::random_color_part() . $this::random_color_part();
        }

        function uclast($str) {
            $test = explode(' ', $str);
            $tm = sizeof($test);
            array_splice($test, 1, -1);
            return $test[$tm-1];

        }

        function searchLaw($con){

            $query = "SELECT name as nome, resumo as resumo
                      FROM database_lawyer.law
                      WHERE cod_oab is not null";

            $stmt = mysqli_query($con, $query);

            return $stmt;
        }

        function mostraAvaliacoes($con, $mail){

            $query = "SELECT date_format(`assessments_law`.`date`, '%m/%Y') as 'data',
                        `assessments_law`.`comment`, `assessments_law`.`cliente`
                    FROM `database_lawyer`.`assessments_law`
                    WHERE `assessments_law`.`mail` = '$mail';";

            $stmt = mysqli_query($con, $query);

            return $stmt;
        }

        function insereInteresse($con, $uSend, $uReceive, $msg){
            try{

                $stmt = $this->mandaNotificacao($con, $uSend, $uReceive, $msg);
                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function insereDenuncia($con, $nome){ //terminar a inserão da denuncia do cliente... || atualizar tabelas...
            try{
                $query = "INSERT INTO database_lawyer.users_chat (`users`, `date_login`)
                            VALUES ('$nome',now());";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function buscaRank($con, $nome){
            try{
                $query = "SELECT l.name, l.rank FROM database_lawyer.law as l WHERE l.name = '$nome'";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function mandaNotificacao($con, $uSend, $uReceive, $msg){

            try{
                $query = "INSERT INTO `database_lawyer`.`notify` 
                    (`user_send`,`user_receive`, `date`,`mensage`)
                    VALUES
                    ('".$uSend."',
                    '".$uReceive."',
                    now(),
                    '".$msg."');";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function buscaInfoAdvogado($con, $nome){
            try{
                $query = "SELECT l.name, l.email, l.phone, l.mobile, l.resumo, l.rank 
                          FROM database_lawyer.law l 
                          WHERE l.name = '".$nome."' limit 1;";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function buscaCasosAdvogado($con, $nome){
            try{
                $query = "SELECT c.id_case, c.client, c.describe, c.date 
                          FROM database_lawyer.law_cases c 
                          WHERE c.law = '".$nome."';";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function mandaAvaliacao($con, $emailAdvogado, $usuarioEnviou, $msg){

            try{
                $query = "INSERT INTO `database_lawyer`.`assessments_law`
                        (`mail`,`date`,`comment`,`cliente`)
                        VALUES
                        ('".$emailAdvogado."',
                         now(),
                        '".$msg."',
                        '".$usuarioEnviou."');";

                $stmt = mysqli_query($con, $query);

                return $stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

        function buscaNotificacoes($con, $email){

            try{
                $query = "";

                $stmt = mysqli_query($query);

                return stmt;
            }catch (Exception $exception){
                return $exception;exit;
            }
        }

    }