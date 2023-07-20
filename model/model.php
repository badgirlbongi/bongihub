<?php
class Client 
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
  { return $this->cellno;}

}
?>