<?php

// strict mode in php. bron: https://www.phptutorial.net/php-tutorial/php-strict_types/
declare(strict_types=1);

// // var_dump(json_encode($_SERVER));

// // var_dump($DOCUMENT_ROOT);

// // Commentaar wat ga ik hier doen?

// /* 
//  *  We gaan hier bezig variabelen
//  * String
//  * Integer
//  * Float
//  * Boolean
//  * Array
//  * Object
//  * NULL
//  * 
// */

// // String
// $greeting = "hallo";
// echo $greeting . "<br>";

// // Integer
// $age = 25;
// echo $age . "<br>";

// // Float
// $price = 10.50;
// echo $price . "<br>";

// // grootste getal in php
// $big_int = PHP_INT_MAX;
// echo $big_int . "<br>";

// // Boolean
// $is_logged_in = NULL;
// echo $is_logged_in ? 'true' : 'false';

// // Array
// $names = ['Erkan', 'Brighton', 'Mike'];

// $fruit = array('apple', 'banana', 'orange');
// foreach ($fruit as $fruit_name) {
//     echo $fruit_name . "<br>";
// }

// // Associative array
// $person = array('name' => 'Erkan', 'age' => 23, 'location' => 'Almere Stad');

// echo $person['name'] . "<br>";


// foreach ($names as $name) {
//     echo $name . "<br>";
// }

// // Object
// class school
// {
//     public $name;
//     public $location;
//     public $students;

//     public function __construct($name, $location, $students)
//     {
//         $this->name = $name;
//         $this->location = $location;
//         $this->students = $students;
//     }

//     function greet_teacher()
//     {
//         return "Hello teacher";
//     }
// }

// $school_1 = new school('Windesheim', 'Almere Stad', 4500);
// // leeraar begroeten op school Widnesheim
// echo $school_1->greet_teacher() . "<br>";

// // gettype object
// echo gettype($school_1) . "<br>";

// // NULL
// $niks = NULL;
// echo $niks . "<br>";

// // Constanten
// define('PI', 3.14);
// echo PI . "<br>";

// // Super global variabelen
// echo $_SERVER['SERVER_NAME'] . "<br>";

// // Functies
// function greet($name)
// {
//     return "Hello " . $name;
// }

// echo greet('Erkan') . "<br>";
// echo greet('Brighton') . "<br>";

// // Functies met default waarde
// function greet_default($name = 'Erkan met defualt waarde')
// {
//     return "Hello " . $name;
// }
// echo greet_default() . "<br>";

// // Functies met meerdere parameters
// function greet_multiple($name, $age)
// {
//     return "Hello " . $name . " je bent " . $age . " jaar oud";
// }
// echo greet_multiple('Erkan', 23) . "<br>";

// // Functies met meerdere parameters en default waarde
// function greet_multiple_default($name, $age = 23)
// {
//     return "Hello " . $name . " je bent " . $age . " jaar oud";
// }
// echo greet_multiple_default('Erkan') . "<br>";

// // hoe weet ik welek type variabele ik heb?
// function get_var_type(string $name)
// {
//     return "Hello " . gettype($name);
// }

// echo get_var_type('Erkan') . "<br>";

// // If else statements
// $age = 18;

// if ($age >= 18) {
//     echo "Je mag naar binnen";
// } else {
//     echo "Je mag niet naar binnen";
// }
// echo " " . "age: " . $age;

// echo "<br>";
// // Switch statements
// $color = 'red';

// switch ($color) {
//     case 'red':
//         echo "The color is red";
//         break;
//     case 'blue':
//         echo "The color is blue";
//         break;
//     default:
//         echo "The color is not red or blue";
// }

// // Loops
// echo "<br> <h1>For loop</h1>";
// for ($i = 0; $i < 10; $i++) {
//     echo $i . "<br>";
// }

// // While loop
// echo "<br> <h1>While loop</h1>";
// $i = 0;
// while ($i < 10) {
//     echo $i . "<br>";
//     $i++;
// }

// // Do while loop
// echo "<br> <h1>Do while loop</h1>";
// $i = 0;
// do {
//     echo $i . "<br>";
//     $i++;
// } while ($i < 10);

// // Foreach loop
// echo "<br> <h1>Foreach loop</h1>";
// $names = ['Erkan', 'Brighton', 'Mike'];
// foreach ($names as $name) {
//     echo $name . "<br>";
// }
// uitleg: include, require, include_once, require_once zijn functies die je gebruikt 
// om bestanden in te voegen in je php bestand.
// // Include
// include 'include.php';
// // Require
// require 'require.php';
// // Include_once
// include_once 'include.php';
// build-in functies bron: https://www.phptutorial.net/php-tutorial/php-strlen/
// $check_length = strlen('Erkan');
// echo $check_length . "<br>";
// echo "<br>";
// // $_SERVER foreach loop
// foreach ($_SERVER as $key => $value) {
//     echo $key . " => " . $value . "<br>";
// }
// $AY = ['Erkan', 'Brighton', 'Mike'];
// for ($i = 0; $i < count($AY); $i++) {
//     echo $AY[$i] . "<br>";
// }

