<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runGame;

const TASK = 'What number is missing in the progression?';
const LENGTH_PROGRESSION = 10;

function getProgression($start, $diff, $length)
{
    $progression = [];
    for ($i = 0; $i < $length; $i++) {
        $progression[] = $start + $diff * $i;
    }
    return $progression;
}

function startGameProgression()
{
    $generateGameData = function () {
        $start = rand(1, 100);
        $diff = rand(1, 10);
        $progression = getProgression($start, $diff, LENGTH_PROGRESSION);
        $hiddenElementIndex = array_rand($progression);
        $rigthAnswer = (string) $progression[$hiddenElementIndex];
        $progression[$hiddenElementIndex] = '..';
        $question = implode(' ', $progression);
        return [$question, $rigthAnswer];
    };
    runGame(TASK, $generateGameData);
}
