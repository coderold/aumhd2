<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="assets/logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="adminlog.css">
    <title>AU-MHD Log In Page</title>
</head>
<body>

    <?php

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $emailAcc = 'admin';
            $passAcc = '123';

            $inputEmail = $_REQUEST['email'];
            $inputPass = $_REQUEST['pass'];


            echo"Email: $inputEmail <br>";
            echo"Pass: $inputPass <br>";
            echo"Account [ email: $emailAcc pass: $passAcc ] ";


            if($emailAcc == $inputEmail && $passAcc == $inputPass){
                echo"<br>laki naman ng tite mo!";
                header("location:dashboard.php");

            }else{
                echo"<br>bobo amputa";
                
            }
        }

    ?>  
    


    <form action="?php echo"$_POST[PHP_SELF] "? method="POST">

    <div class="logcontainer">
        <div class="login">

            <label for="email">Email</label>
            <input type="text" name="email" id="logEmail" placeholder="Email">

            <label for="pass">Password</label>
            <input type="password" name="pass" id="logPass" placeholder="Password">
            
            <input type="submit" id="loginsubmit" value="Submit">
            
        </div>
    </div>
    </form>


</body>
</html>