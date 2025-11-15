<?php

$chute = 0;
$sorteado = rand(1, 100);
$tentativas = 0;

while ($chute != $sorteado) {
    $tentativas++;
    $chute = (int) readline("digite um número: ");

    if ($chute === $sorteado) {
        print("\033[32mvocê venceu! \n");
    } else {
        if ($chute > $sorteado) {
            print("\033[31mNão foi dessa vez... Tente chutar mais baixo na próxima! \033[0m\n");
        } else {
            print("\033[31mNão foi dessa vez... Tente chutar mais alto na próxima! \033[0m\n");
        }
    }
}

print("\033[35mforam necessárias $tentativas tentativas para você acertar! \033[0m\n");
