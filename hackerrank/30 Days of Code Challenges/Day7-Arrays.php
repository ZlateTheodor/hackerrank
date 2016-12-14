<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$n);
$arr_temp = fgets($handle);
$arr = explode(" ",$arr_temp);
$arr2 = array_reverse($arr);

foreach($arr2 as $arr){
    echo $arr." ";
}
?>