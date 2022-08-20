<?php
/*
 * dalam function argument bisa memberikan nilai default value
 * default value argument tidak akan berguna jika di taruk di awal
 * jika ingin memberikan deafult value sebaiknya taruk di argument paling akhir
 * argument dapat dibuat dinamis dan dapat memberikan type data
 * setiap nilai yg dikirimkan php akan mencoba mengkonfersi ke type yang sudah di deklarasikan jika tidak bisa akan error
 * di php terdapat length argumen dimana kita dapat membuat sebuah parameter yang dapat menerima banya
 * di vareable lenght akan secara otomatis akan membuat argument tersebut menjadi array
 *
 *
 */
function sayHello($name){
    echo "Hello $name". PHP_EOL;
}

sayHello("fikri");

#default value di argument
function sayHello1($name = "anonymous"){
    echo "Hello $name". PHP_EOL;
}

#default value di akhir argument
function sayHello2($name, $lastname = ""){
    echo "Hello $name $lastname". PHP_EOL;
}

#contoh argument dengan mendeklarasikan typenya
function sum(int $first, int $last){
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

#function lenght argument
function sumAll(...$values){
    $total = 0;
    foreach ($values as $value){
        $total += $value;
    }
    echo "Total". implode(",", $values)."= $total".PHP_EOL;
}

sayHello("fikri");
sayHello1();
sayHello1("ach");
sayHello2("fikri");
sayHello2("ach", "fikri");
sum(100, 100);
sum("100", "100");
sum(true, false);
//sum("20", "salah");
//sum([],[]);
sumAll(1,2,3,4,5);