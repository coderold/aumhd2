<!DOCTYPE html>
<html lang="en">
<head>
  <title>AU-MHD Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="assets/logo.png" type="image/icon type">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>

    body{
        background-color: #1B263B;
    }
    /* Set height of the grid so .sidenav can be 100% (adjust if needed) */
    .row.content {height: 900px}

    .bg{
      background-color: #ffffff;
      padding: 30px;
      border: solid 1px black;
      border-radius: 2px;
      box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
    }

    .profile{
      border-radius: 50%;
    }

    .navbar{
    background-color: #0D1B2A;
    border-color: #ED3F54;
  }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="admin.php">Mental Health Directory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="admin.php"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
        <li class="active"><a href="adminacc.php"><span class="glyphicon glyphicon-user"></span>  Account</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-4 bg" style="border:solid 1px black; border-radius:2px; padding:20px;";>

                <div class="media">
                    <div class="media-left media-middle">
                        <img src="assets/profile.jpg" alt="profile" class="media-object" style="width:60px; border-radius:50%;">
                    </div>

                    <div class="media-body">
                        <h4 class="media-heading">Admin Account Name</h4>
                        <p>admin@sample.com</p>
                        <a href="login.php"><span class="glyphicon glyphicon-log-out"></span>  Log Out</a>
                    </div>
                </div>

                
                
            </div>

            <div class="col-sm-4"></div>
        </div>
    </div>



</body>
</html>
