<?php
//integers
//predefined constants for integers:
//PHP_INT_MAX - The largest integer supported
//PHP_INT_MIN - The smallest integer supported
//PHP_INT_SIZE -  The size of an integer in bytes
//functions to check if the type of a variable is integer:
//is_int(),is_integer() - alias of is_int(),is_long() - alias of is_int()

//checking if variable is an integer
$a = 5985;
var_dump(is_int($a));
$b = 59.85;
var_dump(is_int($b));

//floats
//predefined constants for floats (from PHP 7.2):
//PHP_FLOAT_MAX - The largest representable floating point number
//PHP_FLOAT_MIN - The smallest representable positive floating point number
//PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
//PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
//functions to check if the type of a variable is float:
//is_float(),is_double() - alias of is_float()

//checking if variable is a float
$c = 10.365;
var_dump(is_float($c));


//A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
//functions to check if a numeric value is finite or infinite:
//is_finite(),is_infinite() of use the var_dump()
$d = 1.9e411;
var_dump($d);
$e = 1.9e411;
var_dump(is_finite($e));
$f = 1.9e411;
var_dump(is_infinite($f));

//NaN is used for impossible mathematical operations.
//functions to check if a value is not a number: is_nan()
$g = acos(8);
var_dump(is_nan($g));

//numerical strings
$h = 5985;
var_dump(is_numeric($h));

$i = "5985";
var_dump(is_numeric($i));

$j = "59.85" + 100;
var_dump(is_numeric($j));

$k = "Hive";
var_dump(is_numeric($k));

//Casting Strings and Floats to Integers
//(int),(integer), or intval() function are often used to convert a value to an integer.
// Cast float to int
$l = 23465.768;
$int_cast = (int)$l;
echo $int_cast;
echo "<br>";

// Cast string to int
$m = "23465.768";
$int_cast = (int)$m;
echo $int_cast;

?>