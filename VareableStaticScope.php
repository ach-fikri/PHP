<?php
function increment(){
   static $counter = 1; //ketika menjadi static siklus hidup dari vareable ini akan terus menerus
    echo "counter = $counter". PHP_EOL;

    $counter ++;
}

increment();
increment();
increment();