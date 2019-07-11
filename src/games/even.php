<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runGame;

const TASK = 'Answer "yes" if number even otherwise answer "no".';

function isEven($num)
{
    return $num % 2 === 0 ? true : false;
}

function startGameEven()
{
    $generateGameData = function () {
        $question = rand(1, 100);
        $rigthAnswer = isEven($question) ? 'yes' : 'no';
        return [$question, $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
