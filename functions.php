<?php 

//                                      PHP Functions
//                                      -------------


// Besides the built-in PHP functions, it is possible to create your own functions.
// A function is a block of statements that can be used repeatedly in a program.
// A function will not execute automatically when a page loads.
// A function will be executed by a call to the function.

function myFunction(){
    echo "this is function";
}

myFunction();


function addNum($num1, $num2){
    echo $num1 + $num2;
}

addNum(12,12);



?>