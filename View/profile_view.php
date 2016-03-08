<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/query.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 08:06 AM
 */
session_start();
if(isset($_SESSION['isLoggedIn']))
{

    $id = $_SESSION['userId'];
    $conn = new mysqli("localhost", "root", "", "socialnetwork");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $results = $conn->query("Select * from userinfo where userId = '$id'");

    if ($row = $results->fetch_assoc()) {
        //$row = $results->fetch_assoc();
        $name = $row["fullname"];
        $username = $row["userName"];
        $bday = $row["birthdate"];
        $gender = $row["gender"];
        $relationship = $row["relationship"];
        $phone = $row["phone"];
        $profile = $row["profilePic"];


    } else {
        $name = "";
        $username = "";
        $bday = "";
        $gender = "";
        $relationship = "";
        $phone = "";
    }

    if(strcmp($profile, "../Pictures/profiles/") == 0){
        $profile = $profile . "f3.jpg";
    }

    if(strcmp($cover, "../Pictures/profiles/\"") == 0){
        $cover = $cover . "f3.jpg";
    }

    $results->free();
    $conn->close();
    echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"home.php\"><span class=\"glyphicon glyphicon-Home\"></span> Home</a></li>
            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> User <span
                        class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\"></a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>Profile</a></li>
                    <li><a href=\"settings.php\"><span class=\"glyphicon glyphicon-cog\"></span>Change Password</a></li>
                </ul>
            </li>
            <li><a href=\"../Controller/logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Log out</a></li>
        </ul>
    </div>
</nav>
<div class=\"container\">
    <div class=\"input\">
        <div class=\"formulario\">
            <div class=\"cover\">
                <a href=\"#\" class=\"photoUpload\"><i class=\"fa fa-camera\"></i> </a>
                <div class=\"profile\">
                    <a href=\"profile_ppic.php\" class=\"photoUpload\"><i class=\"fa fa-camera\"></i> </a>
                </div>
            </div>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <form action='../Controller/SaveProfileInfo.php' method='get' class=\"texto\">
            <br/>
            <a href=\"profile_edit.php\"><i class=\"fa fa-pencil\"></i>Edit</a>
                <br/><br/>

                <div>
                    <i class=\"fa fa-user\"></i>
                    Name : <label>$name</label>
                </div>
                <br/>
                <div>
                    <i class=\"fa fa-users\"></i>
                    Username : <label>$username</label>
                </div>
                <br/>
                <div>
                    <i class=\"fa fa-birthday-cake\"></i>
                    Birthdate : <label>$bday</label>
                </div>
                <br/>
                <div>
                    <i class=\"fa fa-venus-mars\"></i>
                    Gender : <label>$gender</label>
                </div>
                <br/>
                <div>
                    <i class=\"fa fa-heart \"></i>
                    Relationship : <label>$relationship</label>
                </div>
                <br/>
                <div>
                    <i class=\"fa fa-phone\"></i>
                    Telephone : <label>$phone</label>
                </div>
                <br/>
                <br/>
               </form>
            </div>
        </div>
    </div>
</div>";
}
?>

</body>
</html>
