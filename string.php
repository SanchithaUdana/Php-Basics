<?php

//                                              String
//                                              ------


// string length (no of letters)
// we use check string length - strlen()

echo strlen("hello world"); // output 11 
echo "<br>";

// string word cound
// we use str_word_count(); 

echo str_word_count("hello world"); // output 2
echo "<br>";

// Reverse a string
// we using strrev();

echo strrev("hello"); // output "olleh"
echo "<br>";

// search first location a text in a string
// we use strpos();

echo strpos("hello world","hello"); // output 6
echo "<br>";

// replace text
// we use str_replace();

$name = "sanchitha";
$default = "world";

echo "<br>";
echo str_replace($default,$name,"hello world"); // output hello sanchitha

// string concatinations
$first_name = "Sanchitha";
$last_name = "Udana";

$sentence = $first_name;
$sentence .= " {$last_name}";

echo "<br>";
echo "Sentence : {$sentence}"; // output sanchithasachin

?>

<br>

<h1>String Functions</h1>

<!-- Lowercase String -->
<h2> All Simpe Letters : <?php echo strtolower($sentence) ?> </h2>

<!-- Uppercase String -->
<h2>All Capital Letters : <?php echo strtoupper($sentence) ?></h2>

<!-- First Letter Capital -->
<h2>First Letter Capital : <?php echo ucfirst($sentence) ?></h2>

<!-- First Letter Capital of all words -->
<h2>First Letter Capital of all words : <?php echo ucwords($sentence) ?></h2>

<!-- String length -->
<h2>String Length : <?php echo strlen($sentence) ?></h2>

<!-- Search String available -->
<h2>Search String : <?php echo strstr($sentence, "Udana") ?></h2>

<!-- search string position -->
<h2>String Position : <?php echo strpos($sentence, "Udana") ?></h2>


