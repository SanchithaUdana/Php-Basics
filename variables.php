<?php 
//                                              Variables
//                                              ---------


// Rules for PHP variables:

//     A variable starts with the $ sign, followed by the name of the variable
//     A variable name must start with a letter or the underscore character
//     A variable name cannot start with a number
//     A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
//     Variable names are case-sensitive ($age and $AGE are two different variables)


// declare a variable

$a = 20;
$b = "php";
$c = 20.34;

echo "my name is $b";
echo "my age is " . $a . "<br>";


//                                           PHP Variables Scope
//                                           -------------------

// In PHP, variables can be declared anywhere in the script.

// The scope of a variable is the part of the script where the variable can be referenced/used.

// PHP has three different variable scopes:

        // * - local
        // * - global
        // * - static

// 01. Global and Local Scope

    // global scope variable only can access outside of functions
    // local variables are only can access inside of fumction
    // piority is gone to local variable in a function
  
    
$globalVariable = 10;
$p = "this is global";

function test(){
    $localVariable = 20;
    global $globalVariable , $p; 
    $p = "this is local";
    echo "global variable $globalVariable <br>";
    echo "local variable $localVariable <br>"; 

    echo "<h1>piority is gone in function inside to $p <br></h1>";

}

test();

echo "global variable $globalVariable <br>";
echo "local variable $localVariable <br>";
echo "<br>$p<br>";

// we can use echo and print keywords to show some data or information in web page

echo "echo is php data presenting method";
print "print is php data presenting method";








?>