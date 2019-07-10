<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Logic\runGame;

const TASK = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;

function getProgression($start, $diff)
{
    $progression = [];
    for ($counter = 1; $counter <= LENGTH_PROGRESSION; $counter++) {
        $start += $diff;
        $progression[] = $start;
    }
    return $progression;
}

function startGameProgression()
{
    $generateGameData = function () {
        $start = rand(1, 10);
        $diff = rand(1, 10);
        $progression = getProgression($start, $diff);
        $hiddenElementIndex = array_rand($progression);
        $rigthAnswer = (string) $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = '..';
        $question = implode(' ', $progression);
        return [$question, $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
