<?php

    
    if(is_int(5)){//true
      echo "É um inteiro <br>";  
    }
    if(is_int("nao")){//false
      echo "Não é um inteiro <br>";  
    }

    $a = 10;
    if(is_int($a)){
      echo "É um inteiro <br>";  
    }