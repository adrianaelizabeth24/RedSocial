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
    echo "<nav class=\"navbar navbar-inverse\">
    <div class=\"container-fluid\">
        <ul class=\"nav navbar-nav navbar-right\">
            <li><a href=\"home.php\"><span class=\"glyphicon glyphicon-Home\"></span> Home</a></li>
            <li class=\"dropdown\"><a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\"> User <span
                        class=\"caret\"></span></a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"#\"></a></li>
                    <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span>Profile</a></li>
                    <li><a href=\"settings.php\"><span class=\"glyphicon glyphicon-cog\"></span>Settings</a></li>
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
                    <a href=\"#\" class=\"photoUpload\"><i class=\"fa fa-camera\"></i> </a>
                </div>
            </div>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <br/><br/>
            <div class=\"texto\">
                <div class=\"alert alert-danger\" id=\"alert\" hidden></div>
                <div class=\"left-inner-addon\">
                    <i class=\"fa fa-user\"></i>
                    <input type=\"text\" name=\"Name\" id=\"name\" placeholder=\"Name\" class=\"form form-control\"/>
                </div>
                <br/>
                <div class=\"left-inner-addon\">
                    <i class=\"fa fa-envelope-o\"></i>
                    <input type=\"email\" name=\"Email\" id=\"email\" placeholder=\"Email\" class=\"form form-control\">
                </div>
                <br/>
                <div class=\"left-inner-addon\">
                    <i class=\"fa fa-birthday-cake\"></i>
                    <input type=\"date\" name=\"Birthdate\" id=\"bday\" placeholder=\"Birthday\" class=\"form form-control\">
                </div>
                <br/>
                <div class=\"left-inner-addon\">
                    <i class=\"fa fa-venus-mars\"></i>
                    <select name=\"Gender\" class=\"form form-control\" id=\"gender\">
                        <option value=\"female\">Female</option>
                        <option value=\"male\">Male</option>
                        <option value=\"other\">Other</option>
                    </select>
                </div>
                <br/>
                <div class=\"left-inner-addon\">
                    <i class=\"fa fa-phone\"></i>
                    <input type=\"number\" name=\"Telephone\" id=\"telephone\" placeholder=\"Telephone\" class=\"form form-control\">
                </div>
                <br/>
                <input type=\"submit\" value=\"Save\" class=\"form btn btn-default\"/>
                <br/>
                <br/>
            </div>
        </div>
    </div>
</div>";
}
?>

</body>
</html>
