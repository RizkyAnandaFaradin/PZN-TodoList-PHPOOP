<?php
require_once __DIR__ . "../Entitiy/TodoList.php";
require_once __DIR__ . "../Repository/TodoListRepo.php";
require_once __DIR__ . "../Service/TodoListService.php";

use Repository\TodoListRepoImpl;
use Service\TodoListServiceImpl;

function testShowTodoList()
{
   $todoListRepository = new TodoListRepoImpl();
   $todoListService = new TodoListServiceImpl($todoListRepository);
   $todoListService->showService();
}
