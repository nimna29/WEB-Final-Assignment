<html>
<head>
<title>Pixcelence DB & Tables</title>
</head>

<body>
	<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pixcelencedb";

        //create connection
        $conn = new mysqli($servername, $username, $password);

        //check connection
        if($conn->connect_error){
            die("Connection Failed: ".$conn->connect_error);
        }

        //Create Database
        $DB = "CREATE DATABASE pixcelencedb";

        if($conn->query($DB) === TRUE){
            echo "<h2 style = 'color: green; text-align:center;'>Database created successfully!</h2>";
        }
        else{
            echo"<h2 style = 'color: red; text-align:center;'>Error creating Database! </h2>".$conn->error;
        }

        $conn->close();

        //Create Tables
        //create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        //check connection
        if($conn->connect_error){
            die("Connection Failed: ".$conn->connect_error);
        }

        //sql for create table Reservation Details
        $sqlone = "CREATE TABLE reservation(
                    CustomerId int NOT NULL AUTO_INCREMENT, 
                    FirstName varchar(80)NOT NULL,
                    LastName varchar(80)NOT NULL,
                    Email varchar(200)NOT NULL,
                    Phone int(10)NOT NULL,
                    EventDate date NOT NULL,
                    Venue varchar(150)NOT NULL,
                    Package varchar(100)NOT NULL,
                    CustomerMessage varchar(250),
                    PRIMARY KEY (CustomerId))";
        
        if($conn->query($sqlone) === TRUE){
            echo "<h2 style = 'color: green; text-align:center;'>Reservation table created successfully!</h2>";
        }
        else{
            echo"<h2 style = 'color: red; text-align:center;'>Error creating Reservation table! </h2>".$conn->error;
        }
        
        //sql for create table Contact Details
        $sqlqry = "CREATE TABLE MessegeInbox(
                    MessegeID int NOT NULL AUTO_INCREMENT, 
                    FirstName varchar(80)NOT NULL,
                    LastName varchar(80)NOT NULL,
                    Email varchar(200)NOT NULL,
                    Phone int(10)NOT NULL,
                    TextArea varchar(250) NOT NULL,
                    PRIMARY KEY (MessegeID))";
        
        if($conn->query($sqlqry) === TRUE){
            echo "<h2 style = 'color: green; text-align:center;'>Message Table Created Successfully</h2>";
        }
        else{
            echo"<h2 style = 'color: red; text-align:center;'>Error Message Table not Created</h2>".$conn->error;
        }

        $conn->close();
	?>
</body>

</html>
