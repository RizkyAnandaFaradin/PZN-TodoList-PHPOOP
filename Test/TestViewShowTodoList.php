<?php
require_once "../View/ViewShowTodoList.php";
require_once "../BussinesLogic/AddTodoList.php";
AddTodoList("Belajar PHP Dengan TodoList");
AddTodoList("Belajar Laravel");
AddTodoList("Belajar PHP WEB");

viewShowTodoList();
