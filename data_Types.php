<?php 
//                                              PHP Data Types
//                                              --------------

// Variables can store data of different types, and different data types can do different things.

// PHP supports the following data types:

        // String
        // Integer
        // Float (floating point numbers - also called double)
        // Boolean
        // Array
        // Object
        // NULL
        // Resource


// The php var_dump() function can print variable data type and value


//                                                  php string
//                                                  ----------

echo "<h1>php String</h1>";
// string data type is sequence of characters

$name = "Sanchitha";
$department = "ICT";
echo var_dump($name);



//                                                  php integer
//                                                  -----------

echo "<h1>php Integer</h1>";

// rules formintegers :

    // at least must have one digit
    // must not have decimal points
    // can be either negative or positive
    // Integers can be specified in: decimal (base 10), hexadecimal (base 16), octal (base 8), or binary (base 2) notation

$age = 21;
var_dump($age);



//                                                     php float
//                                                     --------- 

echo "<h1>php Float</h1>";

$presentage = 23.45;
var_dump($presentage);


//                                                    php boolean
//                                                    -----------

echo "<h1>php boolean</h1>";

$s = true;
$d = false;

var_dump($s);



//                                                  php Array
//                                                  ---------

echo "<h1>php Array</h1>";

$student = array("a","b","c");
echo "<pre>";
var_dump($student);
echo "</pre>";


//                                                  php Objects 
//                                              (class and object)
//                                                  -----------


// example for class and object (with constructor)

class Teacher{
    public $name;
    public $age;
    
    // constructor of the teacher class
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }


    // user defined method

    public function message(){
        echo "<h2> My class teacher is $this->name. </h2>";
    }

}

// create a object
$teacher1 = new Teacher("aaaa",30);
// call to the message method using object
$teacher1->message();


?>