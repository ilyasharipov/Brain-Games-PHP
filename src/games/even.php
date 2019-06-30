<?php

namespace BrainGames\Games\Even;

use function \cli\line;
use function \cli\prompt;

function game()
{
    line('Welcome to the Brain Games!');
    line('Answer "yes" if number even otherwise answer "no".');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    $rounds = 3;

    for ($counter = 0; $counter < 3; $counter++) {
        $randomNum = rand(1, 100);
        $userAnswer = strtolower(prompt("Question: {$randomNum}"));
        $rigthAnswer;
        $randomNum % 2 === 0 ? $rigthAnswer = 'yes' : $rigthAnswer = 'no';
        
        if ($userAnswer === $rigthAnswer) {
            line('Correct!');
        } else {
            line("'{$userAnswer}' is wrong answer ;(. Correct answer was '{$rigthAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }
    }

    return line("Congratulations, %s!", $name);
}