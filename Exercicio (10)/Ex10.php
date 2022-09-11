<?php
$Preço = $_POST ['Preço'];
$Cod = $_POST ['Cod'];
switch ($Cod){


case 1:
   echo  $Preço + $Preço * 0.15;
            break;
case 3:
    echo  $Preço + $Preço * 0.20;
            break;
case 4:
    echo  $Preço + $Preço * 0.35;
            break;
case 8:
    echo  $Preço + $Preço * 0.40;
            break;
default:
     echo "⚠ ERRO: CAMPO SEM INFORMAÇÃO ⚠";
break;
}
?>