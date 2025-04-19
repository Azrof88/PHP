<?php
//create a multidimensional array without associative array
$names=[
    ["John", "Doe", 25],
    ["Jane", "Smith", 30],
    ["Sam", "Brown", 22]
];
//display the multidimensional array using for loop
for($row=0; $row<count($names); $row++){
    for($col=0; $col<count($names[$row]); $col++){
        echo $names[$row][$col]." ";
    }
    echo "<br>";
}
//display the multidimensional array using foreach loop
foreach($names as $row){
    foreach($row as $col){
        echo $col." ";
    }
    echo "<br>";
}
//display the multidimensional array using print_r() function
echo "<pre>";
print_r($names);
echo "</pre>";

//now show the multidimensional array ina table format like professional format
echo "<table border=1>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "</tr>";
for($row=0; $row<count($names); $row++){
    echo "<tr>";
    for($col=0; $col<count($names[$row]); $col++){
        echo "<td>".$names[$row][$col]."</td>";
    }
    echo "</tr>";
}
echo "</table>";


?>