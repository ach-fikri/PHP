<?php
/*
 * is Function merupakan function untuk mengecek type datanya
 * contoh is_string() untuk mengecek string atau bukan
 */

$data = "fikri";

var_dump(is_string($data));
var_dump(is_bool($data));
var_dump(is_int($data));
var_dump(is_float($data));
var_dump(is_array($data));
var_dump(is_null($data));