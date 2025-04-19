//this file is used to practice array_replace() function,array_replace_recursive() function
<?php
//coreate two 1D normal array with []
$names1 = ["John", "Jane", "Sam"];
$names2 = ["Doe", "Smith", "Brown"];
//now apply array_replace() function to replace the values of first array with second array
$names3 = array_replace($names1, $names2);
//print the result using print_r() function
echo "<pre>";
print_r($names3);
echo "</pre>";



?>