<?php/*
//php has the following data types
//String,Integer,Float (floating point numbers - also called double),Boolean
//Array,Object,NULL,Resource

//string
$a = "Hello world!";
$b = 'Hello world!';
echo $a;
echo "<br>";
echo $b;

//Integer
//must contain atleast one digit(without a decimal point)
$c = 5985;
var_dump($c); //var_dump returns a data type and a value

//Float
//contains a decimal point
$d = 10.365;
var_dump($d);

//Boolean
//mostly used in conditional testing
$e = true;
$f = false;

//Array
//they store mutliple values in one variable
$cars = array("Mercedes","BMW","Volkswagen");
var_dump($cars);

//Object
//objects are instances of classes(a class is a template for an object)
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("black", "Mercedes");
  echo $myCar -> message();
  echo "<br>";
  $myCar = new Car("red", "BMW");
  echo $myCar -> message();
  
 //NULL
 //NULL is a variable that has no value assigned to it
  $g = "PHP is the new ish!";
  $h = null;
  var_dump($x);

//Resource
//the special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
//A common example of using the resource data type is a database call.*/

?>