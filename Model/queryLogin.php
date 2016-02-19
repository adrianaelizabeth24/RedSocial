<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 03:14 AM
 */

function entrar($email,$password)
{
// Create
    $conn = new mysqli('localhost', 'root', '', 'socialnetwork');
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $result = $conn->query("select * from account where email = '$email'");
    $row = $result->fetch_assoc();
    if (empty($row["email"])) {
        header("Location: ../View/login_wrong.html");
    } else {
        if ($row["password"] != $password) {
            header("Location: ../View/login_wrong.html");
        } else {
            session_start();
            $_SESSION['isLoggedIn'] = true;
            header("Location: ../View/home.php");
        }
    }
    $result->free();
    $conn->close();
}

?>