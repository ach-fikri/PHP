<?php
$name = ["fikri", "rina", "aisk"];

#contoh perulangan menggunakan for biasa
  /*
   * for ($i = 0; $i<count($name); $i++){
        echo "Data ke $i = $name[$i]". PHP_EOL;
    }
   */

foreach ($name as $names){
    echo "hello  $names". PHP_EOL;
}
#jika membutuhkan index
foreach ($name as $index => $names){
    echo "$index = $names". PHP_EOL;
}

$person = [
    "first_name" => "ach.",
    "midle_name"=>"fikri",
    "last_name" => "rina"
];

foreach ($person as $key => $value){
    echo "$key : $value" . PHP_EOL;
}