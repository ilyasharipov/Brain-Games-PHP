<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runGame;

const TASK = 'What is the result of the expression?';
const OPERATIONS = ['+', '-', '*'];

function startGameCalc()
{
    $generateGameData = function () {
        $randonNum1 = rand(1, 100);
        $randonNum2 = rand(1, 100);
        $randomOperation = array_rand(OPERATIONS, 1);
        $operation = OPERATIONS[$randomOperation];

        switch ($operation) {
            case '+':
                $rigthAnswer = $randonNum1 + $randonNum2;
                break;
            case '-':
                $rigthAnswer = $randonNum1 - $randonNum2;
                break;
            case '*':
                $rigthAnswer = $randonNum1 * $randonNum2;
                break;
        }

        $question = "$randonNum1 $operation $randonNum2";
        return [$question, (string) $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
