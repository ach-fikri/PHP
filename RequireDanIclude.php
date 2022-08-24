<?php
/*
 * perbedaan require dan iclude yaitu jika require dia akan menghentikan program jika file directori yag mau di masukkan tidak ada
 * sedangkan iclude dia tetap menjalankan programnya  namun dia akan memberikan warning
 * selain require dan include ada yang namanya require_once dan iclude_once kedua function ini bisa mendeteksi
 * jika kita sebelumnya pernah mengambil file yang sama dan maka tidak akan diambil lagi.
 * ketika kita memanggil file yang sama berulang ulang akan menyebabkan error redeclare function
 */
//require "Lib/MyFunction.php";
//include "Lib/MyFunction.php";
//
//echo sayHello("ach", "FIkri");

#contoh dua kali load function yg sama
#maka jalan keluarnya menggunakan include_once
include_once "Lib/MyFunction.php";
include_once "Lib/MyFunction.php";

echo sayHello("ach", "fikri");