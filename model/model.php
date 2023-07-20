<?php
/*
final class Client 
{
  // Properties
  public $name;
  public $surname;
  public $email;
  public $cellno;

  // Methods
 function set_name($name)
  { $this->name = $name;}

  function get_name() 
  { return $this->name;}

  function set_surname($surname) 
  { $this->surname = $surname;}

  function get_surname()
  { return $this->surname;}

  function set_email($email)
   { $this->email = $email;}

  function get_email() 
  { return $this->email;}

  function set_cellno($cellno) 
  { $this->cellno = $cellno;}

  function get_cellno()
  { return $this->cellno;}*/
?>

<?php

final class Client{
private $name;
private $surname;
private $email;
private $cellno;

function __construct(){}

public function setParam(stdClass $client){

    if(array_key_exists('name', $client)){
        $this->name = $client->name;
    }

    if(array_key_exists('surname',$client)){
        $this->surname = $client->surname;
    }

    if(array_key_exists('email', $client)){
        $this->email = $client->email;
    }

    if(array_key_exist('cellno', $client)){
        $this->cellno = $client->institution;
    }
}

public function register( array $client)
{
    $errors = [];

    if(trim($client['name'])){
        $this->name = $client['name'];
    }
    else{
        $errors[] = new ValidatorError('name','name cannot be empty');
    }

    if(trim($client['surname'])){
        $this->surname = $client['surname'];
    }
    else{
        $errors[] = new ValidatorError('surname','surname cannot be empty');
    }

    if(trim($client['email'])){
        $this->email = $client['email'];
    }
    else{
        $errors[] = new ValidatorError('email','email cannot be empty');
    }
    
    if(trim($client['cellno'])){
        $this->cellno = $client['cellno'];
    }
    else{
        $errors[] = new ValidatorError('cellno','cellphone cannot be empty');
    } 

    return $errors;
}}
?>