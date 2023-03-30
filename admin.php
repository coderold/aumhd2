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
    .row.content {height: 900px}

  .bg{
        background-color: #FFFFFF;
        padding: 30px;
        border: solid 1px black;
        border-radius: 2px;
        box-shadow: 2px 2px 2px 1px rgba(0, 0, 0, 0.2);
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
        <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span>  Home</a></li>
        <li><a href="adminacc.php"><span class="glyphicon glyphicon-user"></span>  Account</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-out"></span>  Log Out</a></li>
      </ul>
    </div>
  </div>
</nav>


<div class="container bg">
<h3>Students</h3>
    <br>
    <table class="table">
        <thead>
			<tr>
				<th>Name</th>
				<th>Age</th>
				<th>Grade</th>
				<th>Section</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>

        <tbody>
            <?php
            $servername = "localhost";
			$username = "root";
			$password = "";
			$database = "AUMHD";

			// Create connection
			$connection = new mysqli($servername, $username, $password, $database);

            // Check connection
			if ($connection->connect_error) {
				die("Connection failed: " . $connection->connect_error);
			}

            // read all row from database table
			$sql = "SELECT * FROM AUMHD";
			$result = $connection->query($sql);

            if (!$result) {
				die("Invalid query: " . $connection->error);
			}

            // read data of each row
			while($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>" . $row["name"] . "</td>
                    <td>" . $row["age"] . "</td>
                    <td>" . $row["grade"] . "</td>
                    <td>" . $row["section"] . "</td>
                    <td>" . $row["address"] . "</td>
                    
                    <td>
                        <a class='btn btn-primary btn-sm' href='update'>Update</a>
                        <a class='btn btn-danger btn-sm' href='delete'>Delete</a>
                    </td>
                </tr>";
            }

            $connection->close();
            ?>
        </tbody>
    </table>
</div>




</body>
</html>
