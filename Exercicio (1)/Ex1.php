<?php
$Num1 = $_POST ['NUM1'];
$Num2 = $_POST ['NUM2'];
$Met = $_POST ['MET'];
switch ($Met){


case 'Soma':
   echo  $Num1 + $Num2;
    break;
case 'Subtração':
   echo $Num1 - $Num2;
        break;
case 'Divisão':
   echo $Num1 / $Num2;
        break;
case 'Multiplicação':
   echo $Num1 * $Num2;
        break;
default:
     echo "⚠ ERRO: CAMPO SEM INFORMAÇÃO ⚠";
break;
}
?>