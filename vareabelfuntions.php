<?php

function nama(){
    echo "i love you" . PHP_EOL;
}

$panggilnama ="nama";
$panggilnama();


function sayhello($name, $filter){
    $finalname = $filter($name);
    echo "hello $finalname".PHP_EOL;
}

function samplename(string $name): string{
    return "sample $name";
}

sayhello("fikri", "strtoupper");
