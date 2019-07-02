<?php

namespace BrainGames\Logic;

use function \cli\line;
use function \cli\prompt;

function runGame($info, $game)
{
    line('Welcome to the Brain Games!');
    line($info);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $rounds = 3;

    for ($counter = 0; $counter < 3; $counter++) {
        [$question, $rigthAnswer] = $game();
        line("Question: {$question}");
        $userAnswer = strtolower(prompt("Your answer"));

        if ($userAnswer === $rigthAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rigthAnswer}'.");
            line("Let's try again, {$name}");
            return;
        }
    }

    return line("Congratulations, {$name}!");
}
