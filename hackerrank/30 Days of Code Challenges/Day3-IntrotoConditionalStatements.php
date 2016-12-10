<?php

$handle = fopen ("php://stdin","r");
fscanf($handle,"%d",$N);

if ($N % 2 != 0){
    echo "Weird";
}elseif($N % 2 == 0){
    if($N >= 2 && $N <= 5 ){
        echo "Not Weird";
    }elseif($N >= 6 && $N <= 20){
        echo "Weird";
    }else{
        echo "Not Weird";
    }
}
?>