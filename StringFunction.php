<?php

var_dump(join(",",[10, 11, 12, 103, 14, 15]));
var_dump(explode(" ", "Ach . Fikri"));
var_dump(strtolower("ACH.FIKRI"));
var_dump(strtoupper("Ach. Fikri"));
var_dump(trim("     Fikri     ")); //menghapus spasi di belakang dan di depan
var_dump(substr("Ach. Fikri", 0,3));