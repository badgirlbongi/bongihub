<!DOCTYPE html>
<html>

<head>
	<title>Insert Page page</title>
</head>

<body>
	<center>
		<?php
//10:00 14.07.2023
		// servername => localhost
		// username => root
		// password => empty
		// database name => beautybar
		$conn = mysqli_connect("localhost", "root", "", "beautybar");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all values from the form data(index)
		$first_name = $_REQUEST['first_name'];
		$last_name = $_REQUEST['last_name'];
		$gender = $_REQUEST['gender'];
		$emailaddress = $_REQUEST['emailaddress'];
		$cellno = $_REQUEST['cellno'];
        $password = $_REQUEST['password'];
		
        //creating table client
        $sql = "CREATE TABLE client (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            gender VARCHAR(20),
            emailaddress VARCHAR(50),
            cellno int(10) NOT NULL,
            passcode VARCHAR(30) NOT NULL,
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
            )";
            
            if ($conn->query($sql) === TRUE) {
              echo "Table client created successfully";
            } else {
              echo "Error creating table: " . $conn->error;
            }
            
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO client VALUES (default,'$first_name',
			'$last_name','$gender','$emailaddress','$cellno','$password')";
		
		if(mysqli_query($conn, $sql)){
			echo "<h3>data stored in a database successfully."
				. " Browse through localhost phpmyadmin"
				. " to view the updated data</h3>";

			echo nl2br("\n$first_name\n $last_name\n "
				. "$gender\n $emailaddress\n $cellno\n $password");
		} else{
			echo "ERROR: Hush! Sorry $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>
	</center>
</body>

</html>
