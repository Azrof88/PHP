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

?>