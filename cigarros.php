<?php

    $anos = 0;
    $cigarrosDias = 0;
    $minutosPerdidos = 0;
    $diasPerdidos = 0;

    $anos = (int) readline("Há quantos anos você fuma? ");
    $cigarrosDias = (int) readline("Quantos cigarros por dia você fuma? ");

    $minutosPerdidos = ($anos * 365) * $cigarrosDias * 11;
    $diasPerdidos = round($minutosPerdidos / 60 / 24);

    print("Você já perdeu $diasPerdidos dias de vida");