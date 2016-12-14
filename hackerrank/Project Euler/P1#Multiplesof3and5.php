<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$t);

  
for($a0 = 0; $a0 < $t; $a0++){
    fscanf($handle,"%d",$n);
    $sum = 0;
    for($i=0; $i<$n; $i++){
        if($i % 5==0 || $i % 3 ==0){
            $sum += $i;
        }
    }
    echo $sum."\n"; 
}


?>