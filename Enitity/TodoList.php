<?php 
namespace Entity{
   private string $todo;

   public function getTodo(): string
   {
      return $this->todo;
   }

   public function setTodo(string $todo):void
   {

   }

   function __construct(string $todo = ""){
      $this->todo = $todo;
   }
}



?>