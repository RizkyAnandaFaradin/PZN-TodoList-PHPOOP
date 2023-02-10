<?php

namespace Repository {

   use Entity\TodoList;

   class TodoListRepo
   {
      function save(TodoList $todoList): void;

      function remove(int $number): bool;

      function findAll(): array;
   }
}
