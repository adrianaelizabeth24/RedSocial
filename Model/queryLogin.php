<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 03:14 AM
 */

$email = $_GET["email"];
$password = $_GET["password"];
// Create
$conn = new mysqli('localhost', 'root','','osham');
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result=$conn->query("select * from users where email = '$email' ");
$row = $result->fetch_assoc();
if (empty($row["email"])) {
    echo '<h1>Usuario o password incorrectos, vuelva a intenerarlo</h1>';
} else {
    if ($row["password"] != $password) {
        echo '<h1>Usuario o password incorrectos, vuelva a intenerarlo</h1>';
    } else {
        session_start();
        $_SESSION['isLoggedIn'] = true;
        header("location:../View/.html");
    }
}
$result->free();
$conn->close();

?>