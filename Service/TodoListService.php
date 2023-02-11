<?php


namespace Service {

   use Repository\TodoListRepository;
   use Entity\TodoList;

   interface TodoListService
   {
      function showTodoList(): void;
      function addTodoList(string $todo): void;
      function removeTodoList(int $number): void;
   }

   class TodoListServiceImpl implements TodoListService
   {

      private TodoListRepository $todoListRepository;

      public function __construct(TodoListRepository $todoListRepository)
      {
         $this->todoListRepository = $todoListRepository;
      }

      function showTodoList(): void
      {
         echo PHP_EOL . "TODO LIST" . PHP_EOL;
         $todo = $this->todoListRepository->findAll();
         foreach ($todo as $number => $value) {
            echo "$number. $value " . PHP_EOL;
         }
      }


      function addTodoList(string $todo): void
      {
      }

      function removeTodoList(int $number): void
      {
      }
   }
}
