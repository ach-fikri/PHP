<?php
/*
 * function tidak akan jalan jika tidak dipanggil
 * function di php bebas dibuat dimana saja termasuk dalam if statment
 * function harus pernah di eksekusi baru bisa di akses contoh seperti yang di dalam if statment
 */

 function sayHello(){
     echo "Hello function" . PHP_EOL;
 }

 sayHello();

 #function dalam if statment

$buat = false;

if ($buat){
    function sayHello1(){
        echo "Hello function dalam if" . PHP_EOL;
    }
}

sayHello1();