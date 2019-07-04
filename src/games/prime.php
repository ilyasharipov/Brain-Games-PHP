<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Logic\runGame;

const INFO = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    $devisor = 2;

    while ($devisor <= sqrt($num)) {
        if ($num % $devisor === 0) {
            return false;
        } else {
            $devisor++;
        }
    }
    return true;
}

function startGamePrime()
{
    $runGamePrime = function () {
        $question = rand(2, 100);
        $rigthAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $rigthAnswer];
    };
    runGame(INFO, $runGamePrime);
}
