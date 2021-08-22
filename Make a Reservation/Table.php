<html>
<head>
<title>Reservation Table Create</title>
</head>

<body>
	<?php
		$servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "pixcelencedb";

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
            echo"<h2 style = 'color: red; text-align:center;'>Error creating table! </h2>".$conn->error;
        }

        $conn->close();
	?>
</body>

</html>
