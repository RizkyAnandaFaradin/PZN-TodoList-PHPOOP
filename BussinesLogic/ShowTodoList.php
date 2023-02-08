<?php
require_once __DIR__ . "/../Model/TodoList.php";
//MANAMPILKAN TODO LIST 
function showTodoList()
{
   global $TodoList;
   echo PHP_EOL . "TODO LIST" . PHP_EOL;
   foreach ($TodoList as $number => $value) {
      echo "$number. $value " . PHP_EOL;
   }
}
