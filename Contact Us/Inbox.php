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
        $sqlqry = "CREATE TABLE MessegeInbox(
                    MessegeID int NOT NULL AUTO_INCREMENT, 
                    FirstName varchar(80)NOT NULL,
                    LastName varchar(80)NOT NULL,
                    Email varchar(200)NOT NULL,
                    Phone int(10)NOT NULL,
                    TextArea varchar(250) NOT NULL,
                    PRIMARY KEY (MessegeID))";
        
        if($conn->query($sqlqry) === TRUE){
            echo "<h2 style = 'color: green; text-align:center;'>Table Created Successfully</h2>";
        }
        else{
            echo"<h2 style = 'color: red; text-align:center;'>Error Table not Created </h2>".$conn->error;
        }

        $conn->close();
	?>
</body>

</html>
