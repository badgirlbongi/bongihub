<?php
/*
//global scope
$a = 5; // global scope

function myTest() {
  // using a inside this function will generate an error
  echo "<p>Variable a inside function is: $a</p>";
}
myTest();

echo "<p>Variable a outside function is: $a</p>";*/


/*
//local scope
function myTest() {
    $a = 5; // local scope
    echo "<p>Variable a inside function is: $a</p>";
  }
  myTest();
  
  // using a outside the function will generate an error
  echo "<p>Variable x outside function is: $a</p>";*/

//how to use global scopes
/*$b = 5;
$c = 10;

function myTest()
{
  global $b, $c;
  $c = $b + $c;
}

myTest();
echo $c; // outputs 15*/

//using global variables from the $GLOBAL array
/*$d = 5;
$e = 10;

function myTest()
{
  $GLOBALS['e'] = $GLOBALS['d'] + $GLOBALS['e'];
}

myTest();
echo $e; // outputs 15*/

//using the static keyword so that the local variable will not be deleted after being used in the function
function myTest() 
{
    static $f = 0;
    echo $f;
    $f++;
}
  
  myTest();
  myTest();
  myTest();
?>