<!doctype html>
<html>
<head>
    <title>
        Error
    </title>
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 12:59 AM
 */
function registrar($email,$password)
{
    echo $email;
    echo $password;
    $conn = new mysqli('localhost', 'root', '', 'socialnetwork');

// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if ($conn->query("insert into account (email,password) values ('$email','$password')") === TRUE) {
        echo("New record created successfully");
        session_start();
        $_SESSION['isLoggedIn'] = true;
        $_SESSION['email'] = $email;
        header("Location: ../View/home.php");
    } else {
        echo("error");

    }
    $conn->close();
}
?>
</body>
</html>