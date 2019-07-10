<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Logic\runGame;

const TASK = 'Find the greatest common divisor of given numbers.';

function getGcd($num1, $num2)
{
    return (!$num2) ? $num1 : getGcd($num2, $num1 % $num2);
}

function startGameGcd()
{
    $generateGameData = function () {
        $randonNum1 = rand(1, 100);
        $randonNum2 = rand(1, 100);
        $question = "{$randonNum1} {$randonNum2}";
        $rigthAnswer = (string) getGcd($randonNum1, $randonNum2);
        return [$question, $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
