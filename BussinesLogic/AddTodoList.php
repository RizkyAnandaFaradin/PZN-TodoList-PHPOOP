<?php
require_once __DIR__ . "/../Model/TodoList.php";
require_once __DIR__ . "/../Input/Input.php";


//MENAMBAH TODO LIST
function AddTodoList(string $todo)
{
   global $TodoList;
   $number = count($TodoList) + 1;
   $TodoList[$number] = $todo;
   return $TodoList;
};
