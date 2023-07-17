
<?php
$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "gitbongi";

//creating a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection
if ($conn->connect_error)
{
   die("connection failed: " .$conn->connect_error);
}

//09:00 17.07.2023
//Create database
$sql = "CREATE DATABASE gitbongi";
if ($conn->query($sql) === TRUE)
{
    echo "Database created successfully";
}
else
{
    echo "Error creating database: ". $conn->error;
}

//creating tables
$sql = "CREATE TABLE account 
(id INT(13) UNSIGNEDAUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(40) NOT NULL,
lastname VARCHAR(40) NOT NULL,
emailaddress VARCHAR(40),
phonenumber INT(10),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP)";

if ($conn->query($sql) === TRUE)
{
    echo "Table account created successfully";
    echo "<br>";
} 
else
{
    echo "Error creating table: ".$conn->error;
}

//populating rows
$sql = "INSERT INTO account(id, firstname, lastname,emailaddress, phonenumber)
    VALUES(default,'bongisiwe', 'shabalala','bongishabz21@gmail.com','0825947973')";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
    echo "<br>";
}
else
{
   echo "Error: ". $sql."<br>". $conn->error;
}

//09:00 17.07.2023
//get id of the last inserted record
if ($conn->query(sql) === TRUE)
{
    $last_id = $conn->insert_id;
    echo "New record created successfully. Last inserted ID is: ". $last_id;
}
else
{
    echo"Error: ". $sql. "<br>" . $conn->error;
}

//10:00 17.07.2023
//inserting multiple records
$sql = "INSERT INTO gitbongi (firstname, lastname, email)
VALUES ('Thabiso', 'Seerati', 'thabisoT@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Ayanda', 'More', 'ayandamore@gmail.com');";
$sql .= "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('Mandisa', 'Shabalala', 'mandishabz@gmail.com')";

if ($conn->multi_query($sql) === TRUE)
{
  echo "New records created successfully";
}
else
{
    echo "Error: ". $sql. "<br>" . $conn->error;
}

//php mysql prepared statements


$conn->close();
?>
