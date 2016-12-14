<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
function even ($x){
   foreach ($x as $y => $value){
	    if($y % 2 == 0){
	        echo $value;
	    }
	}
}

function odd ($x){
   echo " "; 
   foreach ($x as $y => $value){
	    if($y % 2 != 0){
	        echo $value;        
	    }
	}  
    echo "\n";
}
    $sampleNr = fgets($_fp);
    for($i = 1; $i<=$sampleNr; $i++){
       ${"testcase$i"} =  trim(fgets($_fp));
       ${"case$i"} = str_split( ${"testcase$i"} );
       even(${"case$i"}).odd(${"case$i"});
    }
    
?>