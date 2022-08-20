<?php
function sayHello(string $name, callable $filter){
    $finalname = call_user_func($filter, $name);
    echo "Hello $finalname".PHP_EOL;
}

sayHello("Fikri", "strtoupper");
#mengirim data dengan menggunakan anonymous function
sayHello("fikri", function (string $name):string{
    return strtoupper($name);
});

#menggunakan arrow function
sayHello("fikri", fn($name)=>strtolower($name));
