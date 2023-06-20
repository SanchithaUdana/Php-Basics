<?php 

//                                              PHP Numbers
//                                              -----------


//                            PHP Integer
//                            -----------  


// Here are some rules for integers :

        // * - An integer must have at least one digit
        // * - An integer must NOT have a decimal point
        // * - An integer can be either positive or negative
        // * - Integers can be specified in three formats: decimal (10-based), hexadecimal (16-based - prefixed with 0x) or octal (8-based - prefixed with 0)


echo PHP_INT_MAX;   // maximun support number
echo "<br>";
echo PHP_INT_MIN;   // minimum support number
echo "<br>";
echo PHP_INT_SIZE;  // size of integer (8 bytes)
echo "<br>";

$age = 21;

echo is_int($age);
echo is_long($age);
echo is_integer($age);

echo "<br>";
// use var_dump();
var_dump(is_int($age));


//                            PHP Float
//                            ---------  


// PHP has the following predefined constants for floats (from PHP 7.2):

        // * - PHP_FLOAT_MAX - The largest representable floating point number
        // * - PHP_FLOAT_MIN - The smallest representable positive floating point number
        // * - PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
        // * - PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

echo PHP_FLOAT_DIG;
echo PHP_FLOAT_EPSILON;
echo PHP_FLOAT_MAX;


$pi = 3.14;
echo is_float($pi);
echo is_double($pi);


//                              php Infinity
//                              ------------


// A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.

$x = 1.9e411;
var_dump($x); // output is  "float(INF)"


//                              php NaN
//                              -------

// not a number

$vil = acos(8);
echo is_nan($vil);
echo var_dump($vil);



//                          PHP Numerical Strings
//                          ---------------------

// we use is_numeric(); function 

$uu = "59.85" + 100;
var_dump(is_numeric($uu));  // output is true

$u = "Hello";
var_dump(is_numeric($u));   // output is false



//                          PHP Casting Strings and Floats to Integers
//                          ------------------------------------------


// The #(int), #(integer), or #intval() function are often used to convert a value to an integer.

echo "<br>";

// Cast float to int
$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

// Cast string to int
$x = "23465.768";
$int_cast = (integer)$x;
echo $int_cast;

echo "<br>";

// using intval();
$host = 2343.54647;
echo intval($host);








?>