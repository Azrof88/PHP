<?php
//create a multidimensional asscociative array using []
$names=[
    "John"=>[
        "age"=>25,
        "city"=>"New York"
    ],
    "Jane"=>[
        "age"=>30,
        "city"=>"Los Angeles"
    ],
    "Sam"=>[
        "age"=>22,
        "city"=>"Chicago"
    ]
];
echo "<pre>";
print_r($names);
echo "</pre>";
 
//print using foreach loop using key ,value pair
foreach($names as $key=>$value){
    echo $key."=>[";
    foreach($value as $k=>$v){
        echo "$k=>$v,<br>";
    }
    echo "]<br>";

}


//print using table format
echo "<table border='1'>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Age</th>";
echo "<th>City</th>";
echo "</tr>";

  
foreach($names as $key=>$value){
    echo "<>";
    echo "<td>".$key."</td>";
    foreach($value as $k=>$v){
        echo "<td>".$v."</td>";
    }
    echo "</tr>";

}
echo "</table>";


?>