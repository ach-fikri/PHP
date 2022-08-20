<?php
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;
};

$sayHello("fikri");

#contoh penggunaan anonymous functiom
function sayGodbay(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Good Bay $finalname" . PHP_EOL;
}
#cara - cara ngirim data yang ada anonymous funstion
sayGodbay("fikri", function (String $name): string {
    return strtoupper("$name");
});

$filterfunction = function (string $name): string {
    return strtoupper($name);
};

sayGodbay("FIko", $filterfunction);

/*
 * sebenarnya anonymous function tidak bisa secara langsung mengakses vareabel di luar function tersebut,
 * jadi untuk mengakses vareabel di luar maka harus memperkenalkan vareabel mana yang akan di akses.
 * cara memperkenalkan vareabel ke anonymous function (closure) yaitu dengan menggunakan "use"
 */
#contoh cara akses vareabel di luar function
$firstname = "ach";
$lastname = "fikri";


$say = function () use ($firstname, $lastname) {
    echo "hello $firstname, $lastname" . PHP_EOL;
};
$say();
