<?php
/*
 * setiap vareable yang dibuat di global ajab disimpan di dalam array $GLOBAL oleh PHP
 */
#contoh deklarasi vareabel global scope
$name = "fikri"; //global scope

function say(){
    global $name; //global keyword untuk mengakses global scope
    echo $name .PHP_EOL;

   echo $GLOBALS["name"]. PHP_EOL; //mengakses dengan $GLOBAL
}
say();
