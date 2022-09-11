<?php
$Num1 = $_POST ['NUM1'];

if ($Num1 % 10 == 0 ){
    echo "É DIVISIVEL POR 10";
    echo '<br> <br>';
    }
 if ($Num1 % 5 == 0){
    echo "É DIVISIVEL POR 5";
    echo '<br> <br>';
    }
 if ($Num1 % 2 == 0){
        echo "É DIVISIVEL POR 2";
        echo '<br> <br>';
    }
    else {
      Echo "Ele não é divisivel por nenhuma das opções.";
    }

    
?>