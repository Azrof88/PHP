<?php

//create a one D array
$fruits = array("apple", "orange", "banana", "grapes", "mango", "pineapple");
if(in_array("apple", $fruits,true)) {
    echo "apple is in the array";
}
else {
    echo "apple is not in the array";
}
//create a multidimensional array uisng [] without associative array
$names = [
    ["John", "Doe", 25],
    ["Jane", "Smith", 30],
    ["Sam", "Brown", 22]
];
//use in_array() function to check if a value exists in the multidimensional array
$searchValue = "John";
$found = false;
foreach ($names as $row) {
    if (in_array($searchValue, $row)) {
        $found = true;
        break;
    }
}
if ($found) {
    echo "The value '$searchValue' was found in the multidimensional array.";
} else {
    echo "The value '$searchValue' was not found in the multidimensional array.";
}
//now create 1D associative array using [] 
$names = [
    "John" => 25,
    "Jane" => 30,
    "Sam" => 22
];
//use in_array() function to check if a value exists in the associative array
$searchValue = "John";
$found = false;
foreach ($names as $key => $value) {
    if ($key === $searchValue) {
        $found = true;
        break;
    }
}
if ($found) {
    echo "The value '$searchValue' was found in the associative array.";
} else {
    echo "The value '$searchValue' was not found in the associative array.";
}
//now create multidimensional associative array using []
$names = [
    "John" => [
        "age" => 25,
        "city" => "New York"
    ],
    "Jane" => [
        "age" => 30,
        "city" => "Los Angeles"
    ],
    "Sam" => [
        "age" => 22,
        "city" => "Chicago"
    ]
];
//use in_array() function to check if a value exists in the multidimensional associative array
$searchValue = "Jane";
$found = false;
foreach ($names as $row) {
    if (in_array($searchValue, $row)) {
        $found = true;
        break;
    }
}
if ($found) {
    echo "The value '$searchValue' was found in the multidimensional associative array.";
} else {
    echo "The value '$searchValue' was not found in the multidimensional associative array.";
}

?>