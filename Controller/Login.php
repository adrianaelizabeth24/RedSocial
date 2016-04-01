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
$remember = $_GET["remember"];

if($email != ""|| $password != "")
{
        entrar($email,$password);
}
else
{
        header("Location: ../View/login_blank.html");
}

if(isset($remember))
{
        $cookie_name = "password";
        $cookie_value = "$password";
        setcookie($cookie_name, $cookie_value, time() + (86400 * 60), "/"); // 86400 = 1 day
}

?>
