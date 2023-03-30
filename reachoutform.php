<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AU Mental Health Directory</title>
    <link rel="icon" href="assets/logo.png" type="image/icon type">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="nav.css">
    <link rel="stylesheet" href="reachout.css">
</head>
<body>

    <header>
        <nav class="navbar">
            <a class="navlogo" href="getStarted.html">Mental Health Directory</a>
            <div class="burger" id="burger" onclick="show()">
                <span></span>
                <span></span>
                <span></span>    
                <div class="dropContent" id="dropContent">
                    <a href="ruok.html">Are you okay?</a>
                    <a href="reachout.html">Reach out.</a>
                    <a href="menu.html">Home</a>
                </div>
            </div>
        </nav>
    </header>

    <form action="dataprocess.php" method="POST">
        <div class="inpContainer">
            
            <div class="inputs">
                <div class="item">
                    <label for="name">Name</label>
                    <input type="text" placeholder="Fullname" name="name" id="name">
                </div>
                
                <div class="item">
                    <label for="age">Age</label>
                    <input type="number" placeholder="Age" id="age" name="age">
                </div>
                
                <div class="item">
                    <label for="grade">Grade</label>
                    <input type="number" placeholder="Grade" id="grade" name="grade">
                </div>
                
                <div class="item">
                    <label for="section">Section</label>
                    <input type="text" placeholder="Section" id="section" name="section">
                </div>
                
                <div class="item">
                    <label for="address">Address</label>
                    <input type="text" placeholder="Address" id="address" name="address">
                </div>
                
                <div class="item">
                    <label for="email">Email Address</label>
                    <input type="email" placeholder="Email Address" id="email" name="email">
                </div>
                
                <div class="item">
                    <label for="phone">Phone Number</label>
                    <input type="text" placeholder="Phone Number" id="phone" name="phone">
                </div>
                
                <div class="item">
                    <label for="sched">Preferred date and time</label>
                    <input type="datetime-local" id="sched" name="sched">
                </div>         
                
                <div class="subcon">
                    <input type="submit" id="submit" name="sub" value="Submit">
                </div>
                
            </div>
        </div>
    </form>


    <script src="dropdown.js"></script>
</body>
</html>