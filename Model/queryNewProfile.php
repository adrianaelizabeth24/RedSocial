<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 05/03/2016
 * Time: 03:47 PM
 */

function SaveNewProfile($userId,$username,$name,$bday,$gender,$relationship,$phone)
{
    $conn = new mysqli('localhost', 'root', '', 'socialnetwork');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($conn->query("insert into userinfo (userId,userName,fullname,birthdate,gender,relationship,phone) values ('$userId','$username','$name','$bday','$gender','$relationship','$phone')") === TRUE) {
            echo("New record created successfully");
        } else {
                echo "Table insertion failed: (" . $conn->errno . ") " . $conn->error;
        }
        $conn->close();
}
?>
</body>
</html>
