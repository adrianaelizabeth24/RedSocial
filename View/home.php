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
                    <li><a href="profile.php"><span class="glyphicon glyphicon-user"></span>Profile</a></li>
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
            <br/>
            <textarea class="form form-control" placeholder="what's on your mind?" id="textbox"></textarea>
            <br/>
            <input type="submit" value="Post" class="form btn btn-default" onclick="post()"/>
            <br/><br/>
        </div>
        <div id="past">

        </div>
    </div>

</div>
</body>
<script>
    function post() {
        var text = document.getElementById('textbox').value;
        var div = document.createElement('div');
        var br = document.createElement('br');
        div.innerHTML = text;
        div.style.background = '#fff';
        div.style.marginLeft = '12%';
        div.style.marginRight = '18%';
        div.style.color = '#6434b3';
        div.style.padding = '5%';
        var past = document.getElementById('past');
        past.appendChild(div);
        past.appendChild(br);
        document.getElementById('textbox').value = "";
    }
</script>
</html>
