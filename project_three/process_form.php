<?php
session_start();

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //acess the form data
    $name = $_POST["name"];
    $position = $_POST["position"];

    //store the data in a session variable
    $_SESSION['inserted_data'] = 
    array('name'=> $name,
           'position'=>$position);

    //redirect back to the index.phtml
    header("Location: index.phtml");
    exit();
}
?>


<!DOCTYPE html>
<html>
<head>
    <title> Welcome Page</title>
</head>
<body>
    <h2>Home page </h2>
    <form action = "view" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="surname">Surname:</label>
        <input type="text" id="surname" name="surname" required><br>

        <label for="email">Email:</label> 
       <input type="text" id="email" name="email" required><br>

       <label for="cellno">Cellphone:</label> 
       <input type="text" id="cellno" name="cellno" required><br>

        <input type="submit" value="Submit" action="client";>  
 
    </form>
    </body>
</html>

<?php 
//using class created in model.php
$user = new Client;
$user_name = $user->set_name('$user_name');
$user_surname = $user->set_surname('$surname');
$user_email = $user->set_email('$user_email');
$user_cellno = $user->set_cellno('$user_cellno'); 