<?php

$name=[
1,
2,
3


];

foreach($name as $value){
    echo $value."<br>";
}

$number=[
//key=>value pair
"Bills"=>2,
"Azrof"=>4,
"Johndoe"=>6,
"Erica"=>8

];
echo "<ul>";
foreach($number as $key=>$value){
    echo "<li>$key=$value</li>";
}
echo "</ul>";

?>