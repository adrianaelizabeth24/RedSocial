<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 12:49 AM
 */

include "../Model/querySignUp.php";
$email = $_GET["email"];
$password = $_GET["password"];
$passwordConfirma = $_GET["confirmPass"];

if($email != ""|| $password != ""|| $passwordConfirma!= "")
{
    if($password == $passwordConfirma)
    {
        registrar($email,$password);
    }
    else
    {
        header("Location: ../View/signup_match.html");
    }
}
else
{
    header("Location: ../View/signup_blank.html");
}
?>

