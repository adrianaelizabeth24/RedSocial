<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 08/03/2016
 * Time: 01:11 AM
 */

$status = $_GET['textbox'];
session_start();
$userId = $_SESSION['userId'];



include("../Model/queryPost.php");
post($status,$userId);
header("location:../View/home.php");