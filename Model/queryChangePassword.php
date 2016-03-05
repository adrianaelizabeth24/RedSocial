<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 05/03/2016
 * Time: 01:44 PM
 */
function changePassword($password)
{
    session_start();
    $user = $_SESSION['user'];
    echo $user;

    $conn = new mysqli('localhost', 'root', '', 'socialnetwork');
    if($conn->connect_error)
    {
        die("Connection failed: " . $conn->connect_error);
        return false;
    }
    if ($conn->query("update account set password = '$password' where email = '$user'") === TRUE) {
            echo("New record created successfully");
             return true;
        } else {
            echo("error");
            return false;
        }
        $conn->close();
}
?>