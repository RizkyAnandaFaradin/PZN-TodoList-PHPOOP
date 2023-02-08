<?php
require_once __DIR__ . "/../Input/Input.php";
require_once __DIR__ . "/../BussinesLogic/RemoveTodoList.php";



function viewRemoveTodoList()
{

   echo PHP_EOL . "x untuk selesai atau batal" . PHP_EOL;
   echo "[--MENGHAPUS TODO--]" . PHP_EOL;
   $todo = input("MASUKKAN TODO: ");

   if ($todo == "x") {
      echo  PHP_EOL . "Berhasil DiBatalkan";
   }
   if (intval($todo) == false) {
      echo PHP_EOL . "Gagal Menghapus Todo";
   } else {
      $success = removeTodoList($todo);
      if ($success) {
         echo "Todo Nomor $todo Berhasil DiHapus" . PHP_EOL;
      } else {
         echo "Gagal Menghapus Todo Nomor $todo" . PHP_EOL;
      }
   }
}
