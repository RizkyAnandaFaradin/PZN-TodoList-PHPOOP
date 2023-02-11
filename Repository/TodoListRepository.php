<?php

namespace Repository {

   use Entity\TodoList;

   interface TodoListRepository
   {
      function save(TodoList $todoList): void;

      function remove(int $number): bool;

      function findAll(): array;
   }


   class TodoListRepoImpl  implements TodoListRepository
   {
      private array $todolist = array();

      function save(TodoList $todoList): void
      {
         echo PHP_EOL . "TODO LIST" . PHP_EOL;
         foreach ($todoList as $number => $value) {
            echo "$number. $value " . PHP_EOL;
         }
      }

      function remove(int $number): bool
      {
         return true;
      }

      function findAll(): array
      {
         return $this->todolist;
      }
   }
}
