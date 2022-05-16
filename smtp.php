<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

require '../vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
// $mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = '127.0.0.1';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 587;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;
//Username to use for SMTP authentication
$mail->Username = 'sistema@alerta.mvlicitacoes.com';
//Password to use for SMTP authentication
$mail->Password = '12345678';
//Set who the message is to be sent from
$mail->setFrom('comercial@mvlicitacoes.com', 'MV');
//Set an alternative reply-to address
$mail->addReplyTo('comercial@mvlicitacoes.com', 'MV');
//Set who the message is to be sent to
//$mail->addAddress('roberto@lemos.biz', 'RL');
$mail->addAddress('comercial@mvlicitacoes.com', 'MV');
//Set the subject line
$mail->Subject  = "Quero receber minha pre-analise";
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body

$mail->Body = '<p><b>Nome:</b> '.$_POST['recno1'].'<p><b>Email:</b> '.$_POST['recma2'].'<p><b>CNPJ:</b> '.$_POST['recem3'].'<p><b>Telefone:</b> '.$_POST['recte4'].'<p><b>Tipo de material ou serviço:</b> '.$_POST['recra5'].'';

//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script>location.href='https://mvlicitacoes.com.br/'</script>";
}
