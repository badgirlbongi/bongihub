<html>
<head><title>Welcome Page</title></head>
<body>
    <?php
          $id = $_POST["id"];
          $name = $_POST["name"];
          $surname = $_POST["surname"];
          $emailaddress = $_POST["emailaddress"];
          $cellno = $_POST["cellno"];

          if ($id == NULL||$name == NULL||$surname == NULL||$emailaddress == NULL||$cellno == NULL)
          {
            echo "Please enter your details again";
          }
          else
          {
            echo "Hello, " . $name." with email address ".$emailaddress;
          }   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gitbongi";

//creating a connection
$conn = new mysqli($servername, $username, $password, $dbname);

//checking connection
if ($conn->connect_error)
{
   die("connection failed: " .$conn->connect_error);
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
        //VALUES()";

if ($conn->query($sql) === TRUE)
{
    echo "New record created successfully";
    echo "<br>";
}
else
{
   echo "Error: ". $sql."<br>". $conn->error;
}

$conn->close();
?>
</body>
</html>