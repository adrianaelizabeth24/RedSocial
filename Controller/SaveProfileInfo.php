<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 05/03/2016
 * Time: 03:13 PM
 */
session_start();
$userId = $_SESSION['userId'];
$userName = $_GET['username'];
$name = $_GET['Name'];
$bday = $_GET['Birthdate'];
$gender = $_GET['Gender'];
$relationship = $_GET['Relationship'];
$phone = $_GET['Telephone'];

include("../Model/queryNewProfile.php");

SaveNewProfile($userId,$userName,$name,$bday,$gender,$relationship,$phone);
header("location:../View/home.php");