<?php
//using class created in model.php
$user = new Client;
$user->set_name('$user_name');
$user->set_surname('$user_surname');
$user->set_email('$user_email');
$user->set_cellno('$user_cellno');

if($_SERVER['REQUEST_METHOD'] === 'POST')
{ 
    $user_name =$_POST["name"];
    $user_surname =$_POST["surname"];
    $user_email =$_POST["email"];
    $user_cellno =$_POST["cellno"];

    echo"Name: ".$user_name;
    echo"<br>";
    echo"Surname: ".$user_surname;
    echo"<br>";
    echo"Email: ".$user_email;
    echo"<br>";
    echo"Cellphone: ".$user_cellno;
    echo"<br>";

}

?>
