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
