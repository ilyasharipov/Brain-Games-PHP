<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runGame;

const TASK = 'Answer "yes" if given number is prime. Otherwise answer "no".';

function isPrime($num)
{
    if ($num < 2) {
        return false;
    }

    $divisor = 2;

    while ($divisor <= sqrt($num)) {
        if ($num % $divisor === 0) {
            return false;
        } else {
            $divisor++;
        }
    }
    return true;
}

function startGamePrime()
{
    $generateGameData = function () {
        $question = rand(1, 100);
        $rigthAnswer = isPrime($question) ? 'yes' : 'no';
        return [$question, $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
