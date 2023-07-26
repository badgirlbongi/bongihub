<?php
//using class created in model.php
$user = new Client;

if($_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    $user_name =$_POST["name"];
    $user_surname =$_POST["surname"];
    $user_email =$_POST["email"];
    $user_cellno =$_POST["cellno"];

    $user->set_name("$user_name");
    $user->set_surname("$user_surname");
    $user->set_email("$user_email");
    $user->set_cellno("$user_cellno");
  
}
?>




