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
 * di php untuk menyelesaikan factorial kita dapat menggunakan recursive function
 * dalam menggunakan function recursiv jangan terlalu dalam karena jika terlalu dalam maka PHP akan menhentikan program karena penggunaan memori pada recursive function sangat besar sehingga jika ingin melakukkan looping dengan banyak data sebaiknya menggunakan loop biasa
 * 
 */

function factorialrecursive(int $value):int{
    if ($value==1){
        return 1;
    }else{
        return $value * factorialfunction($value - 1);
    }
}
var_dump(factorialfunction(5));

function loop(int $value){
    if ($value == 0){
        echo "end loop".PHP_EOL;
    }
    else{
        echo "loop - $value".PHP_EOL;
        loop($value -1);
    }
}

loop(3000000);