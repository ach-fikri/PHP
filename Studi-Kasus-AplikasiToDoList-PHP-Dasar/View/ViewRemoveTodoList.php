<?php

require_once __DIR__."/../Helper/Input.php";
require_once __DIR__."/../BussinesLogic/RemoveTodoLIst.php";

function viewRemoveTodoList(){
    echo "MENGHAPUS TODO".PHP_EOL;

    $pilihan = input("Nomor (x untuk membatalkan)");

    if ($pilihan == "x"){
        echo "Batal Menghapus Todo".PHP_EOL;
    }else{
        $succes = removeTodoList($pilihan);

        if ($succes) {
            echo "Sukses Menghapus todo nomor $pilihan" . PHP_EOL;
        } else {
            echo "Gagal menghapus todo nomor $pilihan" . PHP_EOL;
        }
    }
}