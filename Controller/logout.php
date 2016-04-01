<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 08:14 AM
 */
    session_start();
    if(isset($_SESSION['isLoggedIn'])){
        unset($_SESSION['isLoggedIn']);
        session_destroy();
        header("location: ../View/index.php");
    }
?>