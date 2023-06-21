<?php 


//                                              PHP Loops
//                                              ---------

// Often when you write code, you want the same block of code to run over and over again a 
    //certain number of times. So, instead of adding several almost equal code-lines in a script, 
    //we can use loops.
// Loops are used to execute the same block of code again and again, as long as a certain condition is true.

// In PHP, we have the following loop types:

// while        - loops through a block of code as long as the specified condition is true
// do...while   - loops through a block of code once, and then repeats the loop as long as the specified condition is true
// for          - loops through a block of code a specified number of times
// foreach      - loops through a block of code for each element in an array


// while loop

$count = 5;
while ($count < 10) {
    echo $count;
    $count++;
}


// do while loop

$x = 1;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);


// for loop

for ($i=0; $i < 5 ; $i++) { 
    echo "<br>" . $i . "<br>";
}


// for ... each loop

$list = array(1, 3, 4, 5, 6, 7);
foreach ($list as $value) {
    echo "<br>" . $value . "<br>";
}


// break keyword and continue keyword

// break;    -  is used to terminate the looping statements
// continue; -  is used to skip current iteration loop 



?>