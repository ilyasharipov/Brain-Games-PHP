<?php

namespace BrainGames\Games\Even;

use function \cli\line;
use function BrainGames\Logic\runGame;

const INFO = 'Answer "yes" if number even otherwise answer "no".';

function startGameEven()
{
    $runGameEven = function () {
        $question = rand(1, 100);
        $rigthAnswer = $question % 2 === 0 ? 'yes' : 'no';
        return [$question, $rigthAnswer];
    };
    runGame(INFO, $runGameEven);
}
