<?php 

// if statement

if (5<10) {
    echo "this is if statement";
}


// if .. else statement

if (5<10) {
    echo "right";
} else {
    echo "left";
}

// if ... elseif ... else statement

if (5 < 10) {
    echo "output 01";
} elseif (5 > 1) {
    echo "output 02";
} else {
    echo "output 03";
}


// switch case statement
$variable = 2;
switch ($variable) {
    case 1:
        echo "case 01";
        break;
    case 2:
        echo "case 02";
        break;
    default:
        echo "decault case";
        break;
}


?>