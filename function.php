<?php

function generatepassword($charsList, $length)
{
    $psw = '';

    while (strlen($psw) < $length) {
        $char = getChar($charsList);
        $psw = $char;
    }

    return $psw;
}

function getChar($charsList)
{
    return $charsList[rand(0, strlen($charsList) - 1)];
}
