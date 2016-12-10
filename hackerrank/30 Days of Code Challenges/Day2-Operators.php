<?php 
$handle = fopen ("php://stdin","r");

$mealCost = fgets($handle);
$tipPercent = fgets($handle);
$taxPercent = fgets($handle);  

$tip = $mealCost * $tipPercent/100;
$tax = $mealCost * $taxPercent/100;

$totalCost = round($mealCost + $tip + $tax); 
echo "The total meal cost is $totalCost dollars.";
?>