<?php
    
    $a = true;
    if(is_bool($a)){
        echo "É um booleano1. <br>";
    }
    if(is_bool(0)){
        echo "É um booleano2. <br>";
    }
    if(is_bool(false)){
        echo "É um booleano1. <br>";
    }
    if(0 == false){
        echo "0 é considerado falso<br>";
    }