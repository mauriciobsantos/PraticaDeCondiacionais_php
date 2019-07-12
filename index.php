<?php
    $visitante = [
        'nome' => 'Willian',
        'idade' => 28,
        'sexo' => 'm',
    ];

    $produtos_f = [
        'vestido Ana Rosa - Vermelho',
        'Absorvente',
        'Batom'
    ];

    $produtos_m = [
        'Creme De Babear',
        'Gravata',
        'Machado',
        'Caixa De Ferramentas'
    ];

    $num1 = mt_rand(0,3);
    $num2 = mt_rand(0,3);

    if($visitante['sexo'] == 'm'){
        $sugestoes = [
            $produtos_m[$num1],
            $produtos_m[$num2]
        ];
        
    } else {
        $sugestoes = [
            $produtos_f[$num1],
            $produtos_f[$num2]
        ];
    }

    $hora = 22;
    if($hora > 6 && $hora < 12){
        $periodo = "MANHA";

    } elseif($hora >= 12 && $hora <= 18) {
        $periodo = "TARDE";
    } else {
        $periodo = "NOITE";
    }
    switch($periodo){
        case 'MANHA';
            $corDeFundo = "aqua";
            $corDaFonte = "black";
            break;

        case 'TARDE';
            $corDeFundo = "yellow";
            $corDaFonte = "black";
            break;
            
        case 'NOITE';
            $corDeFundo = "Black";
            $corDaFonte = "white";
            break;

        default: 
            $corDeFundo = "White";
            break;
    }

?>



<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aula 3 Php</title>
    <style>
    body{
        background-color: <?= $corDeFundo ?>;
        color: <?= $corDaFonte ?>;
    }
        
        </style>
</head>
<body>

<h2> Bem Vind<?= $visitante['sexo']=='m' ? 'o' : 'a'; ?>  <?= $visitante['nome'] ?>!</h2>
     <p>
     Sugerimos para você <?= $sugestoes[0] ?> e <?= $sugestoes[1] ?></p>
    
</body>
</html>