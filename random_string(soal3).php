<?php

function cetak($number){
    for($i = 0; $i< $number; $i++ ){
        $str=rand(); 
        $result = md5($str); 
        
        echo $result . "\n";
    }
}

cetak(3);
?>