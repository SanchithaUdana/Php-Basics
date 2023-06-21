<?php 

//                                         PHP Constants
//                                         -------------


// A constant is an identifier (name) for a simple value. The value cannot be changed during the script.
// A valid constant name starts with a letter or underscore (no $ sign before the constant name).
// Note: Unlike variables, constants are automatically global across the entire script.

//                 create php constant
//                 ------------------

// Parameters:

// name: Specifies the name of the constant
// value: Specifies the value of the constant

// **************************

// Warning in case-insensitive trird parameter is no longer support

    // Defining case-insensitive constants is deprecated as of PHP 7.3.0. 
    // As of PHP 8.0.0, only false is an acceptable value, passing true will produce a warning.


// **************************


define("name","Sanchitha"); // case-insensitive property is false (default)
echo name;

define("age", 21);
echo age  . "<br>";


//                 constant Array
//                 --------------


define("cars",["toyota","bmw","audi","lamboghini"]);
echo cars[0] . "<br>";
echo cars[1] . "<br>";


//               constant using in function
//               --------------------------


define("message", "Hi, i am constant. i am by-default in global scope");

function checkConstant(){
    echo message;
}

checkConstant();





?>