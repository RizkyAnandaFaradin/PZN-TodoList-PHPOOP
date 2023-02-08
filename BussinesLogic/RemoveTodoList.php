<?php
require_once __DIR__ . "/../Model/TodoList.php";
//MENGHAPUS TODO LIST
function removeTodoList(int $number): bool
{
   global $TodoList;
   if ($number > count($TodoList)) {
      return false;
   }
   for ($i = $number; $i < count($TodoList); $i++) {
      $TodoList[$i] = $TodoList[$i + 1];
   }
   unset($TodoList[count($TodoList)]);
   return true;
}
