<?php

class GeneralController
{
   public function actionIndex()
   {
      // Список проектов 
      $works = array();
      $works = General::getGeneralWorks();
      // Подключаем визуализацию 
      include_once(ROOT . '/views/site/index.php');

      return true;
   }

   public function actionContact()
   {
      $name    = '';
      $surname = '';
      $email   = '';
      $phone   = '';
      $offer   = '';
      $result  = '';

      if (isset($_POST['submit'])) {
         $name    = ucfirst($_POST['name']);
         $surname = ucfirst($_POST['surname']);
         $email   = $_POST['email'];
         $phone   = $_POST['phone'];
         $offer   = $_POST['offer'];
         $errors = false;



         if (!User::checkEmail($email)) {
            $errors = 'Пожалуйста введите корректный email';
         }

         if ($errors === false) {
            $adminMail = 'info@ve-labs.by';
            $subject = 'Предложения работодателей';
            $message = "Предложение: $offer. От $name $surname телефон: $phone почта: ($email)";
            $result = mail($adminMail, $subject, $message);
         }
      }

      require_once(ROOT . '/views/contacts/contacts.php');
      return true;
   }
}
