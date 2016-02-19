<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 12:59 AM
 */
function registrar($email,$password)
{
    $conn = new mysqli('localhost', 'root', '', 'socialNetwork');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if($conn->query("insert into account values('$email','$password')") === TRUE){
        print("New record created successfully");
    }
    else {
        print("error");
    }
    $conn->close();
}
?>