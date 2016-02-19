<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 03:14 AM
 */

include "../Model/queryLogin.php";
$email = $_GET["email"];
$password = $_GET["password"];

if($email != ""|| $password != "")
{
        entrar($email,$password);
}
else
{
        header("Location: ../View/login_blank.html");
}

?>
