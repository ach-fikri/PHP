<?php
$name = "Fikri";

$otherName = &$name; //preference ditandai dengan '&'
$otherName = "fiki";

echo $name . PHP_EOL;

function increment(int &$value){
    $value++;
}

$counter = 1;
increment($counter);

echo $counter;

#returning reference
//fitur ini jangan sering digunakan karena nantinya akan membingungkan
function &getValue(){
    static $value = 100;
    return $value;
}

$a = &getValue();
$a = 200;

$b = &getValue();
echo $b.PHP_EOL;