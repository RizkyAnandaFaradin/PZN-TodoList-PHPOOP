<?php
require_once  __DIR__ . "/Input/Input.php";
require_once  __DIR__ . "/Model/TodoList.php";
require_once  __DIR__ . "/BussinesLogic/AddTodoList.php";
require_once  __DIR__ . "/BussinesLogic/RemoveTodoList.php";
require_once  __DIR__ . "/BussinesLogic/ShowTodoList.php";
require_once  __DIR__ . "/View/ViewAddTodoList.php";
require_once  __DIR__ . "/View/ViewRemoveTodoList.php";
require_once  __DIR__ . "/View/ViewShowTodoList.php";

echo PHP_EOL . "Aplikasi TodoList" . PHP_EOL;
viewShowTodoList();
