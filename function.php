<?php

function generatepassword($length, $lettere, $numeri, $simboli, $ripetizioni)
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

    if (!$ripetizioni && $length > strlen($base_string)) {
        return false;
    }

    $psw = '';

    while (strlen($psw) < $length) {
        $index = rand(0, strlen($base_string) - 1);
        $char = $base_string[$index];
        if (!$ripetizioni && strpos($psw, $char) !== false) {
            continue;
        }

        $psw .= $char;
    }

    return $psw;
}

function getChar($charsList)
{
    return $charsList[rand(0, strlen($charsList) - 1)];
}
