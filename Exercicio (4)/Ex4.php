<?php


$idade = $_POST ['idade'];

if ($idade < 16){
    echo "Não eleitor";
    }
else if ($idade >=18 && $idade<=65){
    echo "Eleitor obrigatório";
    }
    else if ($idade >=16 && $idade <=18){
        echo "Eleitor facultativo";
    }
    else if ($idade > 65){
        echo "Eleitor facultativo";
    }  

    
?>


