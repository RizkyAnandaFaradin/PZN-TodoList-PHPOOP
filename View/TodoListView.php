<?php

namespace View {

   use Helper\InputHelper;
   use Service\TodoListService;



   class TodoListView
   {

      private TodoListService $todoListService;

      public function __construct(TodoListService $todoListService)
      {
         $this->todoListService = $todoListService;
      }
      function showTodoList(): void
      {
         while (true) {
            $this->todoListService->showTodoList();
            echo  PHP_EOL . "MENU" . PHP_EOL;
            echo "1. Tambah Todo" . PHP_EOL;
            echo "2. Hapus Todo" . PHP_EOL;
            echo "x. Keluar" . PHP_EOL . PHP_EOL;

            $pilihan  = InputHelper::input("Pilih: ");
            if ($pilihan == "1") {
               $this->addTodoList();
            } elseif ($pilihan == "2") {
               $this->removeTodoList();
            } elseif ($pilihan == "x") {
               break;
            } else {
               echo "Pilihan Tidak Dimengerti" . PHP_EOL;
            }
         }
      }

      function removeTodoList(): void
      {
         echo PHP_EOL . "x untuk selesai atau batal" . PHP_EOL;
         echo "[--MENGHAPUS TODO--]" . PHP_EOL;
         $todo = InputHelper::input("MASUKKAN TODO: ");

         if ($todo == "x") {
            echo  PHP_EOL . "Berhasil DiBatalkan";
         }
         if (intval($todo) == false) {
            echo PHP_EOL . "Gagal Menghapus Todo";
         } else {
            $this->todoListService->removeTodoList($todo);
         }
      }

      function addTodoList(): void
      {
         echo PHP_EOL . "x untuk selesai atau batal" . PHP_EOL;
         echo "[--MENAMBAH TODO--]" . PHP_EOL;
         $todo = InputHelper::input("MASUKKAN TODO: ");
         if ($todo == "x") {
         }
         $this->todoListService->addTodoList($todo);
      }
   }
}
