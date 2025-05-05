// Copyright (c) 2020 Mr. Coxall All rights reserved
//
// Created by: Mr. Coxall
// Created on: Sep 2020
// This file contains the JS functions for index.html
<?php
    // Generate a random number between 1 and 6 (no session, just local variable)
    if (!isset($_POST['userGuess'])) {
        $randomNumber = rand(1, 6);
    } else {
        // Get the user's guess from the form
        $userGuess = $_POST['userGuess'];
        $randomNumber = $_POST['randomNumber']; // Fetch the random number from the hidden input

        // Check if the guess is correct
        if ($userGuess == $randomNumber) {
            $message = "You got it right!";
            $messageStyle = "color: green;";
        } else {
            $message = "Wrong guess. The correct number was $randomNumber.";
            $messageStyle = "color: red;";
        }
    }
?>