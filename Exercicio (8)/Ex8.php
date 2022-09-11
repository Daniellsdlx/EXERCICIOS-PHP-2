<?php

$preço = $_POST ['preço'];

if ($preço < 10){
    echo $preço + $preço * 0.7;
    }
if ($preço >= 10.01 and $preço < 30){
    echo $preço + $preço * 0.5;
        }
if ($preço > 30 and $preço <= 50){
    echo $preço + $preço * 0.4;
                }
if ($preço > 50){
    echo $preço + $preço * 0.3;
                        }


?>
