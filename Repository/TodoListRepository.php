<?php

namespace Repository {

   use Entity\TodoList;

   interface TodoListRepository
   {
      function save(TodoList $todoList): void;

      function remove(int $number): bool;

      function findAll(): array;
   }


   class TodoListRepositoryImpl  implements TodoListRepository
   {
      public array $todoList = array();

      function save(TodoList $todoList): void
      {
      }

      function remove(int $number): bool
      {
         return true;
      }

      function findAll(): array
      {
         return $this->todoList;
      }
   }
}
