<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 01/03/2016
 * Time: 08:34 AM
 */

$email = $_GET["email"];

$numero = crypt($email,'."#$%&/()');
include("../Model/queryResetPassword.php");
resetPassword($email,$numero);

require("../PHPMailer-master/PHPMailer-master/PHPMailerAutoload.php");
$mail = new PHPMailer;

$mail->isSMTP();
$mail->SMTPDebug = 2;
$mail->Debugoutput = 'html';
$mail->Host = 'smtp-mail.outlook.com';
$mail->Port = 587;
$mail->SMTPSecure = 'tls';
$mail->SMTPAuth = true;
$mail->Username = "oshamosham@outlook.com";
$mail->Password = "proyectoPHP123";
$mail->setFrom("oshamosham@outlook.com", 'Social Lite');
$mail->addReplyTo("oshamosham@outlook.com", 'Social Lite');
$mail->addAddress($email, 'Usuario');
$mail->Subject = 'Reset Password';
$mail->isHTML(true);
$mail->Body = "Hola, querido usuario, tu nuevo password de tu cuenta es: $numero";
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    header("location:../View/mailSent.html");
}

?>

