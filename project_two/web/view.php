<?php 
//using class created in model.php
$user = new Client;
$user_name = $user->set_name('$user_name');
$user_surname = $user->set_surname('$surname');
$user_email = $user->set_email('$user_email');
$user_cellno = $user->set_cellno('$user_cellno'); 

if($_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    $user_name =$_POST["name"];
    $user_surname =$_POST["surname"];
    $user_email =$_POST["email"];
    $user_cellno =$_POST["cellno"];

    echo"Name: ".$user_name =$_POST["name"];
    echo"<br>";
    echo"Surname: ".$user_surname =$_POST["surname"];
    echo"<br";
    echo"Email: ".$user_email =$_POST["email"];
    echo"<br>";
    echo"Cellphone: ".$user_cellno =$_POST["cellno"];
    echo"<br>";

}

?>

   