<?php
function creatname(){
    $name = "eko"; //Local Scope
}
creatname();
echo $name .PHP_EOL; //$name tidak dimengerti karena vareable ini hanya bisa dia akses dalam function