<?php

namespace BrainGames\Games\Even;

use function BrainGames\Logic\runGame;

const TASK = 'Answer "yes" if number even otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0 ? true : false;
}

function startGameEven()
{
    $generateGameData = function () {
        $randomNum = rand(1, 100);
        $question = $randomNum;
        $rigthAnswer = isEven($randomNum) ? 'yes' : 'no';
        return [$question, $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
