<?php

class ChatController
{

   public function actionMessage()
   {
      // Реализация чата
      require_once(ROOT . '/views/chat/chat.php');
      return true;
   }
}
