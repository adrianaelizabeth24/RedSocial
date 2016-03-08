<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Case</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="js/query.js" type="text/javascript"></script>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <ul class="nav navbar-nav navbar-right">
            <li><a href="#"><span class="glyphicon glyphicon-Home"></span> Home</a></li>
            <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> User <span
                        class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="#"></a></li>
                    <li><a href="profile_view.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
                    <li><a href="settings.php"><span class="glyphicon glyphicon-cog"></span>Change Password</a></li>
                </ul>
            </li>
            <li><a href="../Controller/logout.php"><span class="glyphicon glyphicon-log-in"></span> Log out</a></li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="input">
        <div id="status" style="margin: 0 20% 0 10%">
            <form method="get" action="../Controller/Post.php">
                <br/>
                <textarea class="form form-control" placeholder="what's on your mind?" name="textbox"
                          id="textbox"></textarea>
                <br/>
                <input type="submit" value="Post" class="form btn btn-default"/>
            </form>
            <br/><br/>
        </div>
        </div>
    <br/><br/>
        <div id="past">
            <?php
            // Create
            $conn = new mysqli('localhost', 'root', '', 'socialnetwork');
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            session_start();
            $uId = $_SESSION['userId'];
            $result = $conn->query("select * from post where userId = '$uId' order by postId desc");
            while($row = $result->fetch_assoc()){
                $palabras = $row['post'];
                echo "<div class='post'>$palabras</div><br/><br/>";
            }
            $result->free();
            $conn->close();

            ?>

        </div>
</div>
</body>
</html>
