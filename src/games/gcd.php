<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Logic\runGame;

const INFO = 'Find the greatest common divisor of given numbers.';

function getGCD($num1, $num2) {
    return !$num2 ? $num1 : getGCD($num2, $num1 % $num2);
};

function startGameGcd()
{
    $runGameGcd = function () {
        $randonNum1 = rand(1, 100);
        $randonNum2 = rand(1, 100);
        $question = "{$randonNum1} {$randonNum2}";
        $rigthAnswer = (string) getGCD($randonNum1, $randonNum2);
        return [$question, $rigthAnswer];
    };
    runGame(INFO, $runGameGcd);
}