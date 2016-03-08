<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 05/03/2016
 * Time: 12:37 AM
 */

function post($status,$userId)
{
    echo $userId;
    echo $status;
    $conn = new mysqli('localhost', 'root', '', 'socialnetwork');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
     if ($conn->query("insert into post(userId,post) values ('$userId','$status')") === TRUE) {
        } else {
            echo("error");
        }
        $conn->close();

}
?>
