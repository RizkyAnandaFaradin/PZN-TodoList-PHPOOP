<?php
require_once __DIR__ . "/../BussinesLogic/AddTodoList.php";
require_once __DIR__ . "/../Input/Input.php";

function viewAddTodoList()
{
   echo PHP_EOL . "x untuk selesai atau batal" . PHP_EOL;
   echo "[--MENAMBAH TODO--]" . PHP_EOL;
   $todo = input("MASUKKAN TODO: ");
   if ($todo == "x") {
   }
   AddTodoList($todo);
}
