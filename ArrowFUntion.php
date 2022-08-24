<?php
/*
 * arrow funtion merupakan function pengganti dari anonymous function yang lebih sederhana
 * di arrow funtion bisa menggunakan vareabele di luar dan cara penuslisannya tidak perlu dg kata function cukup dengan
 * fn() dan di lanjutnkan dengan tanda sama dengan dan lebih dari
 * */

#contoh

$firstname = "ach.";
$lastname = "fikri";

#contoh menggunakan anonymous function

$anonymousFunction = function () use ($firstname, $lastname): string{
    return "Hello $firstname $lastname" . PHP_EOL;
};
echo $anonymousFunction();

#contoh Arrow function
$arrowFunction = fn() => "Hello  $firstname $lastname". PHP_EOL;

echo $arrowFunction();