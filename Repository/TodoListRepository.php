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
         $number = count($this->todoList) + 1;
         $this->todoList[$number] = $todoList;
      }

      function remove(int $number): bool
      {

         if ($number > count($this->todoList)) {
            return false;
         }
         for ($i = $number; $i < count($this->todoList); $i++) {
            $this->todoList[$i] = $this->todoList[$i + 1];
         }
         unset($this->todoList[count($this->todoList)]);
         return true;
      }

      function findAll(): array
      {
         return $this->todoList;
      }
   }
}
