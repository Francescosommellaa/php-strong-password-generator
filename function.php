<?php

function generatepassword($length, $lettere, $numeri, $simboli)
{
    $base_string = '';

    if ($lettere) {
        $base_string .= 'qwertyuiopasdfghjklzxcvbnmQWERTYUIOIPASDFGHJKLZXCVBNM';
    }

    if ($numeri) {
        $base_string .= '1234567890';
    }

    if ($simboli) {
        $base_string .= '!?&%$<>^+-*/()[]{}@#_=';
    }

    $psw = '';

    while (strlen($psw) < $length) {
        $index = rand(0, strlen($base_string) - 1);
        $char = $base_string[$index];
        $psw .= $char;
    }

    return $psw;
}

function getChar($charsList)
{
    return $charsList[rand(0, strlen($charsList) - 1)];
}
