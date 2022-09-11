<?php

$preço = $_POST ['preço'];

if ($preço <= 20){
    echo $preço * 0.45 + $preço;
    }
    else if ($preço > 20){
        echo $preço * 0.3 + $preço;
        }
?>
