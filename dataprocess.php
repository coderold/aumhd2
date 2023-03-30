<?php
    $name = $_POST["name"];
    $age = $_POST["age"];
    $grade = $_POST["grade"];
    $section = $_POST["section"];
    $address = $_POST["address"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $sched = $_POST["sched"];


    $host = "localhost";
    $dbname = "AUMHD";
    $username = "root";
    $password = "";
        
    $conn = mysqli_connect(hostname: $host,
                        username: $username,
                        password: $password,
                        database: $dbname);
        
    if (mysqli_connect_errno()) {
        die("Connection error: " . mysqli_connect_error());
    }           
       
    echo"Connection succesful.";

    $sql = "INSERT INTO AUMHD (name,age,grade,section,address,email,phone,sched)
            VALUES (?,?,?,?,?,?,?,?)";

    $stmt = mysqli_stmt_init($conn);

    if ( ! mysqli_stmt_prepare($stmt, $sql)) {
 
        die(mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "siisssis",
                            $name,
                            $age,
                            $grade,
                            $section,
                            $address,
                            $email,
                            $phone,
                            $sched);

    mysqli_stmt_execute($stmt);

    echo "Record saved.";

?>