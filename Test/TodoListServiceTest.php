<?php
require_once __DIR__ . "/../Entity/TodoList.php";
require_once __DIR__ . "/../Repository/TodoListRepository.php";
require_once __DIR__ . "/../Service/TodoListService.php";
require_once __DIR__ . "/../View/TodoListView.php";
require_once __DIR__ . "/../Input/InputHelper.php";



use Entity\TodoList;
use Repository\TodoListRepositoryImpl;
use Service\TodoListServiceImpl;
use View\TodoListView;

function testShowTodoList()
{
   $todoListRepository = new TodoListRepositoryImpl();
   $todoListRepository->todoList[1] = new TodoList("NANDA");
   $todoListRepository->todoList[2] = new TodoList("Rizky");
   $todoListRepository->todoList[3] = new TodoList("Faradins");

   $todoListService = new TodoListServiceImpl($todoListRepository);

   $todoListService->showTodoList();
}

function testAddTodoList()
{
   $todoListRepository = new TodoListRepositoryImpl();
   $todoListService = new TodoListServiceImpl($todoListRepository);
   $todoListService->addTodoList("Mandi");
   $todoListService->addTodoList("Menyuci");
   $todoListService->addTodoList("Menjemur");
   $todoListService->addTodoList("Belajar");

   $todoListService->showTodoList();
}

function testRemoveTodoList()
{
   $todoListRepository = new TodoListRepositoryImpl();
   $todoListService = new TodoListServiceImpl($todoListRepository);
   $todoListService->addTodoList("Mandi");
   $todoListService->addTodoList("Menyuci");
   $todoListService->addTodoList("Menjemur");
   $todoListService->addTodoList("Belajar");

   $todoListService->showTodoList();
   $todoListService->removeTodoList(2);
   $todoListService->showTodoList();
   $todoListService->removeTodoList(7);
   $todoListService->showTodoList();
}

function testViewShowTodoList()
{

   $todoListRepository  = new TodoListRepositoryImpl();
   $todoListService     = new TodoListServiceImpl($todoListRepository);
   $todoListView        = new TodoListView($todoListService);
   $todoListService->addTodoList("Mandi");
   $todoListService->addTodoList("Menyuci");
   $todoListService->addTodoList("Menjemur");
   $todoListService->addTodoList("Belajar");
   $todoListView->showTodoList();
}

function testViewAddTodoList()
{

   $todoListRepository  = new TodoListRepositoryImpl();
   $todoListService     = new TodoListServiceImpl($todoListRepository);
   $todoListView        = new TodoListView($todoListService);
   $todoListService->addTodoList("Mandi");
   $todoListService->addTodoList("Menyuci");
   $todoListService->addTodoList("Menjemur");
   $todoListService->addTodoList("Belajar");
   $todoListView->showTodoList();
   $todoListView->addTodoList();
}

function testDeleteTodoList()
{

   $todoListRepository  = new TodoListRepositoryImpl();
   $todoListService     = new TodoListServiceImpl($todoListRepository);
   $todoListView        = new TodoListView($todoListService);
   $todoListService->addTodoList("Mandi");
   $todoListService->addTodoList("Menyuci");
   $todoListService->addTodoList("Menjemur");
   $todoListService->addTodoList("Belajar");
   $todoListView->showTodoList();
}

testDeleteTodoList();
