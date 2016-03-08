<!DOCTYPE html>
<html lang="en">
<head>
    <title>Change Profile Picture</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/home.css">
</head>
<body>
<?php
/**
 * Created by PhpStorm.
 * User: Adriana
 * Date: 19/02/2016
 * Time: 08:10 AM
 */

session_start();
if(isset($_SESSION['isLoggedIn']))
{
    echo "
<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"home.php\"><span class=\"glyphicon glyphicon-Home\"></span> Home</a></li>
            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> User <span
                        class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\"></a></li>
                    <li><a href=\"profile_view.php\"><span class=\"glyphicon glyphicon-user\"></span>Profile</a></li>
                    <li><a href=\"settings.php\"><span class=\"glyphicon glyphicon-cog\"></span>Change Password</a></li>
                </ul>
            </li>
            <li><a href=\"../Controller/logout.php\"><span class=\"glyphicon glyphicon-log-in\"></span> Log out</a></li>
        </ul>
    </div>
</nav>
<div class=\"container\">
     <div class=\"input\" style=\"width:60%; margin-left: 20%\">
        <div class=\"formulario\">
            <div class=\"texto\">
                <form enctype = \"multipart/form-data\" action = \"../Controller/UploadProfilePicture.php\" method = \"post\" >
            <br /><br />
                Imagen de perfil <input type =\"file\" name = \"profilePicture\" >
                <input type = \"hidden\" name = \"MAX_FILE_SIZE\" value = \"5000000\" />
            <br /><br />
                <br/>
                <input type=\"submit\" value=\"Upload\" class=\"form btn btn-default\"/>
                <br/>
                </form >
                <br/>
            </div>
        </div>
    </div>
    </form>
</div>
";
}
?>
</body>

</html>

