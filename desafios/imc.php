<?php

$peso = 74;
$altura = 1.71;
$imc = $peso / $altura ** 2;
// Peso dividido pela altura ao quadrado
echo "Seu IMC é de $imc. Você está com o IMC: ";

if ($imc < 18.5) {
    echo "abaixo";
} elseif ($imc < 25) {
    echo "dentro";
} else {
    echo "acima";
}

echo " do recomendado!";

