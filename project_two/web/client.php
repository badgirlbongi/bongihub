<?php
//user template setup
     session_start();

    /*include("model/model.php");*/

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

    //store the data into session variable
    $_SESSION['inserted_data'] = array
    (
        'name'=>$user_name,
        'surname'=>$user_surname,
        'email'=>$user_email,
        'cellno'=>$user_cellno
    );

    //redirect back to the client.phtml
    header("Location: client.phtml");
    exit();
}
?>

   