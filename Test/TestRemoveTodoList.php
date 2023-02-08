<?php
require_once "../Model/TodoList.php";
require_once "../BussinesLogic/RemoveTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";


addTodoList("Bermain Mobile Legends");
addTodoList("Bermain PUBG");
addTodoList("Belajar Programming");
addTodoList("Belajar PHP");

showTodoList();

removeTodoList(3);
showTodoList();
