<?php

//                                              String
//                                              ------


// string length (no of letters)
// we use check string length - strlen()

echo strlen("hello world"); // output 11 


// string word cound
// we use str_word_count(); 

echo str_word_count("hello world"); // output 2


// Reverse a string
// we using strrev();

echo strrev("hello"); // output "olleh"


// search first location a text in a string
// we use strpos();

echo strpos("hello world","hello"); // output 6


// replace text
// we use str_replace();

$name = "sanchitha";
$default = "world";

echo "<br>";
echo str_replace($default,$name,"hello world"); // output hello sanchitha



?>