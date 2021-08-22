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
            echo "<h2 style = 'color: green; text-align:center;'>We have received your message and would like to thank you for writing to us. If your inquiry is urgent, please use the telephone number listed below to talk to one of our pixelence staff members.Otherwise, we will reply by email as soon as possible.</h2>";
        }
        else{
            echo"<h2 style = 'color: red; text-align:center;'>Error Messege Not Sent! Try again Later! </h2>".$conn->error;
        }

        $conn->close();
	?>
</body>

</html>
