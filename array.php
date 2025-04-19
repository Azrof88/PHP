<?php

$numbers=[1,2,3,"Azrof","Erica"];
$numbers2=array(1,2,3,"Azrof","Erica",array(1,2,3,"Azrof","Erica"));


print_r($numbers);
echo "<pre>";
print_r($numbers2);
echo "</pre>";
echo "<ul>";
for($i=0;$i<count($numbers);$i++){
    echo "<li>$numbers[$i] </li>";

}
echo "</ul>";
for($i=0;$i<count($numbers2);$i++){
    for($j=0;$j<count($numbers2[$i]);$j++){
        echo $numbers2[$i][$j]." ";
    }
    echo $numbers2[$i]."<br>";
}
echo "<pre>";
print_r($numbers2[2]."<br>");
print_r($numbers2[5][0]."<br>");

echo "</pre>";
?>