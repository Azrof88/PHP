<?php
//create a multidimensional array with employees data
$employees = [
    "John" => [
        "age" => 25,
        "city" => "New York",
        "department" => "HR"
    ],
    "Jane" => [
        "age" => 30,
        "city" => "Los Angeles",
        "department" => "Finance"
    ],
    "Sam" => [
        "age" => 22,
        "city" => "Chicago",
        "department" => "IT"
    ]
];
//use list in foreach loop to extract values
foreach ($employees as $name => $details) {
    list($age, $city, $department) = array_values($details);
    echo "Name: $name, Age: $age, City: $city, Department: $department<br>";
}


//now using list show in table format
echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>City</th>";
echo "<th>Department</th>";
echo "</tr>";
foreach ($employees as $name => $details) {
    list($age, $city, $department) = array_values($details);
    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$age</td>";
    echo "<td>$city</td>";
    echo "<td>$department</td>";
    echo "</tr>";
}
echo "</table>";    

//create multidimesnsional array without associative array
$names = [
    ["John", "Doe", 25],
    ["Jane", "Smith", 30],
    ["Sam", "Brown", 22]
];
//use list in foreach loop to extract values
foreach ($names as $details) {
    list($firstName, $lastName, $age) = $details;
    echo "Name: $firstName $lastName, Age: $age<br>";
}
//now using list show in table format
echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "</tr>";
foreach ($names as $details) {
    list($firstName, $lastName, $age) = $details;
    echo "<tr>";
    echo "<td>$firstName $lastName</td>";
    echo "<td>$age</td>";
    echo "</tr>";
}
echo "</table>";

foreach($names as list($firstName, $lastName, $age)){
    echo "Name: $firstName $lastName, Age: $age<br>";
}
//now using list show in table format
echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "</tr>";
foreach($names as list($firstName, $lastName, $age)){
    echo "<tr>";
    echo "<td>$firstName $lastName</td>";
    echo "<td>$age</td>";
    echo "</tr>";
}
echo "</table>";



?>