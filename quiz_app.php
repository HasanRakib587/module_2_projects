<?php

    echo "\n----------WELCOME TO QUIZ-----------\n";

    echo "\nPlease select the appropriate letter for your response \n";

    $score = 0;

    //Question 1    
    echo "\nQuiz 1: What is the capital of France ? \n";
    echo "a) Berlin \n";
    echo "b) New York \n";
    echo "c) Paris \n";

    echo "Your Anser: \n";
    $answer = fgets(STDIN);

    if(trim($answer) == "c"){
        echo "Correct ! \n";
        $score++;
    }else{
        echo "Incorrect !, the correct anser is c) Paris \n";
    }

    //Question 2    
    echo "\nQuiz 2: What is 2 + 3 Equals to ? \n";
    echo "a) 4 \n";
    echo "b) 5 \n";
    echo "c) 6 \n";

    echo "Your Anser: \n";
    $answer = fgets(STDIN);

    if(trim($answer) == "b"){
        echo "Correct ! \n";
        $score++;
    }else{
        echo "Incorrect !, the correct anser is b) 5 \n";
    }

    //Question 3    
    echo "\nQuiz 3: What is the color of the sky on a clear day ? \n";
    echo "a) blue \n";
    echo "b) grey \n";
    echo "c) black \n";

    echo "Your Anser: \n";
    $answer = fgets(STDIN);

    if(trim($answer) == "a"){
        echo "Correct ! \n";
        $score++;
    }else{
        echo "Incorrect !, the correct anser is a) blue \n";
    }

    echo "Quiz Complete ! \n";
    echo "You got $score out of 3";

?>