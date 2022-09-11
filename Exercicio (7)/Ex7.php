<?php

$Nome = $_POST ['Nome'];
$Idade = $_POST ['Idade'];
$Sexo = $_POST ['Sexo'];

if ($Sexo == "Feminino" || "feminino" and $Idade < 25) {
Echo "$Nome você foi ACEITA...seja bem-vinda";
}
else {
    Echo "Desculpe $Nome......Você não foi aceita (o)";
}