<?php


namespace Service {

   use Repository\TodoListRepo;
   use Entity\TodoList;

   interface TodoListService
   {
      function addTodoList(string $todo): void;
      function removeTodoList(int $number): void;
      function showTodoList(): void;
   }

   class TodoListServiceImpl implements TodoListService
   {

      private TodoList $todoList;

      public function __construct(TodoList $todoList)
      {
         $this->todoList = $todoList;
      }

      function addService(string $todo): void
      {
      }

      function removeService(string $number): string
      {
         return "nanda";
      }

      function showService(): void
      {

         echo PHP_EOL . "TODO LIST" . PHP_EOL;
         $todo = $this->TodoListRepo->findAll();
         foreach ($todo as $number => $value) {
            echo "$number. $value " . PHP_EOL;
         }
      }
   }
}
