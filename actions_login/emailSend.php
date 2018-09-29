<?php
/**
 * Created by PhpStorm.
 * User: Daniel
 * Date: 13/10/2018
 * Time: 13:49
 */

$Nome = "daniel";    // Pega o valor do campo Nome
$Fone = "31996143157";    // Pega o valor do campo Telefone
$Email = "elawyerpfc@gmail.com";    // Pega o valor do campo Email
$Mensagem = "oi";    // Pega os valores do campo Mensagem

// Variável que junta os valores acima e monta o corpo do email

$Vai = "Nome: $Nome\n\nE-mail: $Email\n\nTelefone: $Fone\n\nMensagem: $Mensagem\n";
$Vai = "D";

require_once("../PHPMailer_5.2.0/class.phpmailer.php");

define('GUSER', 'elawyerpfc@gmail.com');    // <-- Insira aqui o seu GMail
define('GPWD', '71500430bb07');        // <-- Insira aqui a senha do seu GMail

function smtpmailer($para, $de, $de_nome, $assunto, $corpo)
{
    /*global $error;
    $mail = new PHPMailer();

        $mail->IsSMTP();		// Ativar SMTP
        $mail->SMTPDebug = 1;		// Debugar: 1 = erros e mensagens, 2 = mensagens apenas
        $mail->SMTPAuth = true;		// Autenticação ativada
        $mail->SMTPSecure = 'ssl';	// SSL REQUERIDO pelo GMail
        $mail->Host = 'smtp.gmail.com';	// SMTP utilizado
        $mail->Port = 465;  		// A porta 587 deverá estar aberta em seu servidor
        $mail->Username = 'elawyerpfc@gmail.com';
        $mail->Password = '71500430bb07';
        $mail->SetFrom($de, $de_nome);
        $mail->Subject = $assunto;
        $mail->Body = $corpo;
        $mail->AddAddress($para);
        if(!$mail->Send()) {
            $error = 'Mail error: '.$mail->ErrorInfo;
            return false;
        } else {
            $error = 'Mensagem enviada!';
            return true;
        }
    */
    $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
    try {
        //Server settings
        $mail->SMTPDebug = 2;                                 // Enable verbose debug output
        $mail->IsMail();                                      // Set mailer to use SMTP
        $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
        $mail->SMTPAuth = true;                               // Enable SMTP authentication
        $mail->Username = 'elawyerpfc@gmail.com';
        $mail->Password = '71500430bb07';
        $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
        $mail->Port = 465;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom('elawyerpfc@gmail.com', 'Mailer');
        $mail->addAddress('elawyerpfc@gmail.com', 'Joe User');     // Add a recipient
        $mail->addAddress('elawyerpfc@gmail.com');               // Name is optional
        $mail->addReplyTo('elawyerpfc@gmail.com', 'Information');
        $mail->addCC('elawyerpfc@gmail.com');
        $mail->addBCC('elawyerpfc@gmail.com');

        //Attachments
        //Content
        $mail->isHTML(true);                                  // Set email format to HTML
        $mail->Subject = 'Here is the subject';
        $mail->Body = 'This is the HTML message body <b>in bold!</b>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        var_dump($mail->send());
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
    }
}

//var_dump(phpinfo());exit;
// Insira abaixo o email que irá receber a mensagem, o email que irá enviar (o mesmo da variável GUSER),
// o nome do email que envia a mensagem, o Assunto da mensagem e por último a variável com o corpo do email.

if (smtpmailer('elawyerpfc@gmail.com', 'elawyerpfc@gmail.com', 'Nome do Enviador', 'Assunto do Email', $Vai)) {

    Header("location:http://www.dominio.com.br/obrigado.html"); // Redireciona para uma página de obrigado.

}
if (!empty($error)) echo $error;
