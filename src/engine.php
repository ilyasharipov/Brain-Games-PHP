<?php

namespace BrainGames\Engine;

use function \cli\line;
use function \cli\prompt;

const ROUNDS_COUNT = 3;

function runGame($task, $getQuestionAndAnswer)
{
    line('Welcome to the Brain Games!');
    line($task);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        [$question, $rigthAnswer] = $getQuestionAndAnswer();
        line("Question: {$question}");
        $userAnswer = prompt("Your answer");

        if ($userAnswer === $rigthAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rigthAnswer}'.");
            line("Let's try again, {$name}");
            return;
        }
    }

    line("Congratulations, {$name}!");
}
