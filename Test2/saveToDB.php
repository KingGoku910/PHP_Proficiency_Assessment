<?php

    // Database code
   
    
    // Create connection to the database
    $databaseHost = "localhost";
    $databaseName = "users-db";
    $username = "root";
    $password = "";

    $connection = mysqli_connect($databaseHost, $username, $password, $databaseName);

    if(mysqli_connect_errno()){
        echo('<input action="action" type="button" value="Back" onclick="window.history.go(-1); return false;" />');
        die("The connection to the database has failed due to: ". mysqli_connect_error());
    }

    // Create database table 
    $sqlStatement = "create table IF NOT EXISTS csv_import(
        Id integer NOT NULL,
        Name varchar(50) NOT NULL,
        Surname varchar(50) NOT NULL,
        Initial varchar(1) NOT NULL,
        Age int NOT NULL,
        DateOfBirth varchar(50) NOT NULL,
        PRIMARY KEY (Id)
    )";
    if (mysqli_query($connection, $sqlStatement)) {
        echo('<input action="action" type="button" value="Back" onclick="window.history.go(-1); return false;" />');
        $CompletedString ="<script type='text/javascript'>alert('Table csv_import was created successfully');</script>";
        echo($CompletedString);
    

    } else {
        echo('<input action="action" type="button" value="Back" onclick="window.history.go(-1); return false;" />');
        $failedString ="<script type='text/javascript'>alert('Error creating table csv_import: ');</script>";
        echo($failedString);
    }

    // Save csv data to the database
    if(isset($_POST["submit"])){
        if($_FILES['file']['name'])
        {
            $file_name = explode(".", $_FILES['file']['name']);
            if($file_name[1] == 'csv'){
                $handler = fopen($_FILES['file']['tmp_name'], "r");
                while($data = fgetcsv($handler))
                {
                    $item1 = mysqli_real_escape_string($connection, $data[0]);  
                    $item2 = mysqli_real_escape_string($connection, $data[1]);
                    $item3 = mysqli_real_escape_string($connection,$data[2]);
                    $item4 = mysqli_real_escape_string($connection,$data[3]);
                    $item5 = mysqli_real_escape_string($connection,$data[4]);
                    $item6 = mysqli_real_escape_string($connection,$data[5]);
                    $query = "INSERT into csv_import(Id,Name,Surname,Initial,Age,DateOfBirth) values('$item1','$item2','$item3','$item4','$item5','$item6')";
                    mysqli_query($connection, $query);
                }
                
                fclose($handler);
                echo "<script>alert('Import done');</script>";
            }
        }
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>User Generator with Database</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' href="./css/bootstrap.css">
    <link rel='stylesheet' type='text/css' href="./css/bootstrap.css.map">
</head>
<body style="margin: px;">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Surname</th>
                    <th scope="col">Initial</th>
                    <th scope="col">Age</th>
                    <th scope="col">DateOfBirth</th>
                </tr>
            </thead>
                    
            <tbody>
                <?php
                $databaseHost = "localhost";
                $databaseName = "users-db";
                $username = "root";
                $password = "";

                $connection = mysqli_connect($databaseHost, $username, $password, $databaseName);
                $sql = "SELECT * FROM csv_import ORDER BY ID desc";
                $result = $connection -> query($sql);

                if (!$result) {
                    die("Invalid query: " . $connection->error);
                }
                
                while($row = $result->fetch_assoc()) {
                    echo "<tr>
                    <td>" . $row['Id'] . "</td>
                    <td>" . $row['Name'] . "</td>
                    <td>" . $row['Surname'] . "</td>
                    <td>" . $row['Initial'] . "</td>
                    <td>" . $row['Age'] . "</td>
                    <td>" . $row['DateOfBirth'] . "</td>
                </tr>";
                }
                

                ?>
            </tbody>
            
        </table>
</body>    
</html>
