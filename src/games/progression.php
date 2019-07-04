<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Logic\runGame;

const INFO = 'What number is missing in the progression?';

function getProgression()
{
    $start = rand(1, 10);
    $diff = rand(1, 10);
    $progression = [];
    for ($counter = 1; $counter <= 10; $counter++) {
        $start += $diff;
        $progression[] = $start;
    }
    return $progression;
}

function getQuestProgression($progression)
{
    $string = "";
    foreach ($progression as $num) {
        $string .= "{$num} ";
    }

    return $string;
}

function startGameProgression()
{
    $runGameProgression = function () {
        $progression = getProgression();
        $randomIndexProgressiv = array_rand($progression, 1);
        $randomNumFromProgressive = $progression[$randomIndexProgressiv];
    
        foreach ($progression as $num) { // search for a number in a progression to hide
            if ($num === $randomNumFromProgressive) {
                $progression[$randomIndexProgressiv] = '..';
            }
        }

        $question = getQuestProgression($progression);
        $rigthAnswer = (string) $randomNumFromProgressive;
        return [$question, $rigthAnswer];
    };
    runGame(INFO, $runGameProgression);
}
