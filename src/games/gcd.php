<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function getGcd($a, $b)
{
    return (!$b) ? $a : getGcd($b, $a % $b);
}

function startGameGcd()
{
    $generateGameData = function () {
        $a = rand(1, 100);
        $b = rand(1, 100);
        $question = "$a $b";
        $rigthAnswer = (string) getGcd($a, $b);
        return [$question, $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
