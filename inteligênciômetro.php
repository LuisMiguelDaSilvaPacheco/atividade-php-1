<?php

$dia = readline("Que dia você nasceu? ");
$mes = readline("Que mês você nasceu? ");
$ano = readline("Que ano você nasceu? ");

inteligenciometro($dia, $mes, $ano);

function inteligenciometro(int $dia, int $mes, int $ano)
{

    $ano = $ano % 100;
    $naoInteligente = round(somatorio($mes) + ($ano / 100) * (50 - $dia));
    $inteligente = 100 - $naoInteligente;

    print("Você é $inteligente% inteligente! \n");
}

function somatorio(int $mes): int
{

    $somatorio = 0;

    for ($i = 1; $i <= $mes; $i++) {

        $somatorio += $i;
    }

    return $somatorio;
}
