<?php
/*
 * untuk dapat mengakses nilai dari return harus di taruk di sebuah vareabel
 * ketika menggunakan return kode dibawahnya tidak akan dieksekusi
 * dan bisa kita mendeklarasikan type data return
 * di php ada yg namanya type jugling (otomatis dikonfersi)
 */

function sum(int $first, int $last) :int
{
    $total = $first+$last;
    return $total;
}

function getFinalValue(int $value) : string
{
    if ($value >= 80){
        return "A";
    } elseif ($value >= 70){
        return "B";
    }elseif ($value >= 60){
        return "C";
    }else{
        return "D";
    }
    echo "Ups".PHP_EOL;
}

$total= sum(10,20);
var_dump($total);

$scor = getFinalValue(90);
var_dump($scor);
