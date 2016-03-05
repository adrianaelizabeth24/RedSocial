<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 05/03/2016
 * Time: 12:37 AM
 */

function resetPassword($email,$password)
{
    $conn = new mysqli('localhost', 'root', '', 'socialnetwork');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $id = $conn->query("select userId from account where email = '$email'");
    $row = $id->fetch_assoc();
    $userid = $row["userId"];
    $id->free();
    if (!empty($row["userId"])) {
        if ($conn->query("update account set password = '$password' where userId = '$userid'") === TRUE) {
        } else {
            echo("error");
        }
        $conn->close();

    }

}
?>
