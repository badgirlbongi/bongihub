
<?php
/*
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
//prepare and bind
$stmt = $conn->prepare("INSERT INTO gitbongi (firstname, lastname,email)
VALUES(?,?,?)");
$stmt->bind_param("sss", $firstname, $lastname, $email);

// set parameters and execute
$firstname = "Thabiso";
$lastname = "Seerati";
$email = "thabisoT@gmail.com";
$stmt->execute();

$firstname = "Ayanda";
$lastname = "More";
$email = "ayandamore@gmail.com";
$stmt->execute();

$firstname = "Mandisa";
$lastname = "Shabalala";
$email = "mandishabz@gmail.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();

//11:00 17.07.2023
//selecting data from mysql database
$sql = "SELECT id, firstname, lastname FROM gitbongi";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
  // output data of each row
  while($row = $result->fetch_assoc()) 
  {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else 
  {
    echo "0 results";
  }

//12:00 17.07.2023
//selecting data and puttiing  it in an html table 
$sql = "SELECT id, firstname, lastname FROM gitbongi";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["firstname"]." ".$row["lastname"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

//13:00 17.07.2023
//order by clause
$sql = "SELECT id, firstname, lastname FROM gitbongi ORDER BY lastname";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
  }
} else {
  echo "0 results";
}

//14:00 17.07.2023
//delete data
$sql = "DELETE FROM gitbongi WHERE id=2";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

//15:00 17.07.2023
//update data
$sql = "UPDATE gitbongi SET lastname='Skhosana' WHERE id=3";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

//limit data selections
$sql = "SELECT * FROM gitbongi LIMIT 2 OFFSET 4";


$conn->close();*/
?>
