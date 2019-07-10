<?php

namespace BrainGames\Logic;

use function \cli\line;
use function \cli\prompt;

const NUMBER_OF_ROUNDS = 3;

function runGame($info, $getQuestionAndAnswer)
{
    line('Welcome to the Brain Games!');
    line($info);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($counter = 0; $counter < NUMBER_OF_ROUNDS; $counter++) {
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

    return line("Congratulations, {$name}!");
}
