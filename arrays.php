<?php 


//                                              PHP Arrays
//                                              ----------


// An array stores multiple values in one single variable:

// In PHP, there are three types of arrays:

    // Indexed arrays - Arrays with a numeric index
    // Associative arrays - Arrays with named keys
    // Multidimensional arrays - Arrays containing one or more arrays

//             Indexed Array
//              -----------

$student = array("aa","bb","cc","dd");
echo $student[1];

// count elements of an array
echo count($student);

//              Associative Array
//              -----------------

$department = array("dep1"=>"ict","dep2"=>"et");
echo $department["dep1"];

echo "<br>";

foreach ($department as $key => $value) {
    echo $key . "==" . $value; 
    echo "<br>";
}


//              Multidiamentional Array
//              -----------------------


$cars = array(
    array(1,2,3),
    array(4,5,6),
    array(7,8,9)
);

for ($row=0; $row < 3 ; $row++) { 
    for ($col=0; $col < 3 ; $col++) { 
        echo $cars[$row][$col];
        echo "&nbsp;";
    }
    echo "<br>";
}


//                                 PHP - Sort Functions For Arrays
//                                  ----------------------------

    // sort() - sort arrays in ascending order
    // rsort() - sort arrays in descending order
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key    






?>