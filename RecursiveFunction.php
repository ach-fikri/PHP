<?php
function factorialfunction(int $value): int{
    $total = 1;
    for ($i = 1; $i<=$value; $i++){
        $total *= $i;
    }
    return $total;
}

var_dump(factorialfunction(5));
/*
 * dii php untuk menyelesaikan factorial kita dapat menggunakan recursive function
 */

function factorialrecursive(int $value):int{
    if ($value==1){
        return 1;
    }else{
        return $value * factorialfunction($value - 1);
    }
}
var_dump(factorialfunction(5));