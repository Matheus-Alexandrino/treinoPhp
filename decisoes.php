<?php

$idade = 16;
$numeroDePessoas= 2;
$idadeAcompanhante=16;

echo "Você só pode entrar se tiver mais de 18 anos ou";
echo " a partir de 16 anos acompanhado de alguém maior de idade.\n\n";

if ($idade == 18 ){
    echo "Você tem $idade anos, pode entrar sozinho.";    
} else if ($idade  >= 16 && $idade < 18 && $numeroDePessoas > 1 && $idadeAcompanhante >= 18){
        echo "Você tem $idade anos e está acompanhado com alguém maior de $idadeAcompanhante anos, pode entrar!";
} else {
       echo "Você só tem $idade anos e não está acompanhado de alguém maior de 18 anos, tu não pode entrar!";
}

//ternário

// $idade2 = 15;
// $mensagem = $idade2 < 18 ? ‘Você é menor de idade’ : ‘Você é maior de idade’;
// echo $mensagem;