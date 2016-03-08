<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 07/03/2016
 * Time: 09:30 PM
 */

session_start();
$userId = $_SESSION['userId'];
$userName = $_GET['username'];
$name = $_GET['Name'];
$bday = $_GET['Birthdate'];
$gender = $_GET['Gender'];
$relationship = $_GET['Relationship'];
$phone = $_GET['Telephone'];

echo $userId;
echo $userName;
echo $name;
echo $bday;
echo $gender;
echo $relationship;
echo $phone;

include("../Model/queryProfile.php");

UpdateProfile($userId,$userName,$name,$bday,$gender,$relationship,$phone);
header("location:../View/profile_view.php");
?>