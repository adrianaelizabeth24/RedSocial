<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 05/03/2016
 * Time: 01:30 PM
 */
$password = $_GET["password"];
$passwordConfirm = $_GET["passConfirm"];
include("../Model/queryChangePassword.php");

if($password != $passwordConfirm)
{
    header("location:../View/settings_error.php");
}
else{
    $bool = changePassword($password);
    if($bool) {
        header("location:../View/home.php");
    }
    else{
        echo "error";
    }
}
?>