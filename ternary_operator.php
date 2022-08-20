<?php

$gender = "wanita";
$hi = null;
#operator ini untuk mempersingkat if statment operator ini menggunakan tanda '?'
#dalam bentuk if :
//    if ($gender == "pria"){
//        $hi = "Hi Bro";
//    }else{
//        $hi ="hi nona";
//    }
//

$hi = $gender == "pria" ? "hi bro" : "hi nona";

echo $hi . PHP_EOL;