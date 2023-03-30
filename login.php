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

    .btn{
      background-color: #6B818C;
      color: black;
      transition: 0.2s;
    }

  </style>
</head>
<body>

<?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $emailAcc = 'admin@sample.com';
            $passAcc = '123';

            $inputEmail = $_REQUEST['email'];
            $inputPass = $_REQUEST['pass'];


            echo"Email: $inputEmail <br>";
            echo"Pass: $inputPass <br>";
            echo"Account [ email: $emailAcc pass: $passAcc ] ";


            if($emailAcc == $inputEmail && $passAcc == $inputPass){
                echo"<br>laki naman ng tite mo!";
                header("location:admin.php");

            }else{
                echo"<br>bobo amputa";
                
            }
        }

    ?>  


<nav class="navbar navbar-inverse navbar-static-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Mental Health Directory</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li class="active"><a href="#"><span class="glyphicon glyphicon-log-in"></span>  Log In</a></li>
      </ul>
    </div>
  </div>
</nav>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4"></div>

            <div class="col-sm-4 bg">
                <form action="login.php" method="POST">

                    <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>

                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" name="pass">
                    </div>

                    <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                    </div>

                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>

            <div class="col-sm-4"></div>
        </div>
    </div>
    

</body>
</html>
