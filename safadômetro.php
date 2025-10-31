<?php

    safadometro(0, 0, 0);

    function safadometro(int $dia, int $mes, int $ano){

        $dia = readline("Que dia você nasceu? ");
        $mes = readline("Que mes você nasceu? ");
        $ano = readline("Que ano você nasceu? ");
        
        $ano = $ano % 100;
        $safadeza = round(somatorio($mes) + ($ano/100) * (50 - $dia));
        $anjo = 100 - $safadeza;

        print("Você é $anjo% anjo perfeito, mas $safadeza% vagabundo \n");
    }

    function somatorio(int $mes) : int{

        $somatorio = 0;

        for ($i= 1; $i <= $mes; $i++) { 
            # code...
            $somatorio += $i;
        }

        return $somatorio;
    }