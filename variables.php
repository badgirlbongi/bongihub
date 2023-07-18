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
/*function myTest() 
{
    static $f = 0;
    echo $f;
    $f++;
}
  
  myTest();
  myTest();
  myTest();*/

  //ECHO and PRINT
  //there's no much difference except that PRINT has a return value of 1 so it can be used in expressions.
  // and ECHO has no return value.

  //echo
  /*echo "<h2>PHP is Fun!</h2>";
  echo "This ", "string ", "was ", "made ", "with multiple parameters.";
  //how to output text and variables with echo
  $txt1 = "Beocome a developer";
  $txt2 = "Techcode Hive";
  $x = 5;
  $y = 4;
  
  echo "<h2>" . $txt1 . "</h2>";
  echo "Study PHP at " . $txt2 . "<br>";
  echo $x + $y;*/

  //print
  /*print "<h2>PHP is Fun!</h2>";
  print "Hello world!<br>";
  print "I'm learning PHP!";
  //how to output text and variables with print
  $txt1 = "Become a developer";
  $txt2 = "Techcode Hive";
  $g = 5;
  $h = 4;

  print "<h2>" . $txt1 . "</h2>";
  print "Study PHP at " . $txt2 . "<br>";
  print $g + $h;*/
?>