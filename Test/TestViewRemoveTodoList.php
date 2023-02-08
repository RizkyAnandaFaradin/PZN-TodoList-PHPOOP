<?php
require_once "../View/ViewRemoveTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
require_once "../BussinesLogic/ShowTodoList.php";

AddTodoList("Belajar Membaca");
AddTodoList("Belajar Memasak");
AddTodoList("Belajar Berbicara");
AddTodoList("Belajar Berjalan");
showTodoList();
viewRemoveTodoList();
showTodoList();
