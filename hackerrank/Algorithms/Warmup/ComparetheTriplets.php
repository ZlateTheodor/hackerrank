<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d %d %d",$a0,$a1,$a2);
fscanf($handle,"%d %d %d",$b0,$b1,$b2);

    $alice = 0; $bob = 0;

    if($a0 > $b0) {
       $alice++; 
    }elseif($b0 > $a0){
       $bob++;
    }

     if($a1 > $b1) {
       $alice++; 
    }elseif($b1 > $a1){
       $bob++;
    }  

    if($a2 > $b2) {
       $alice++; 
    }elseif($b2 > $a2){
       $bob++;
    }

     echo $alice." ".$bob;
?>
