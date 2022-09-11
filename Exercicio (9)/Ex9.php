<?php

$Nome = $_POST ['Nome'];
$Idade = $_POST ['Idade'];


if ($Idade <= 10){
    echo "$Nome..Você deve pagar R$30,00";
    }
if ($Idade > 10 and $Idade <= 29){
    echo "$Nome..Você deve pagar R$60,00";
        }
if ($Idade > 29 and $Idade <= 45){
    echo "$Nome..Você deve pagar R$120,00";
                }
if ($Idade > 45 and $Idade <= 59){
    echo "$Nome..Você deve pagar R$150,00";
                            }
if ($Idade > 59 and $Idade <= 65){
     echo "$Nome..Você deve pagar R$250,00";
                                        }
                                    
if ($Idade > 65){
     echo "$Nome..Você deve pagar R$400,00";
                                                    }


?>