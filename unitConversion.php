<?php
// number in lb we want to convert to kg
$pounds = 140;
// floating point value for the lb to kg conversion
$lb_to_kg = 0.453592;
// use the var above to calculate lb multiplied by the kg conversion
$kilograms = $pounds * $lb_to_kg;
// display the lb to kg
echo "Weight: ";
echo $pounds;
echo " lb = ";
echo $kilograms;
echo " kg";


// number in miles we want to convert to km
$miles = 2.5;
// floating point value for the mile to km conversion
$mile_to_km = 1.60934;
// use the var above to calculate miles multiplied by the km conversion
$kilometers = $miles * $mile_to_km;
// display the miles to km
echo "Distance: ";
echo $miles;
echo " miles = ";
echo $kilometers;
echo " km";
?>