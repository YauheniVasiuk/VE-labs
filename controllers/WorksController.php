<?php

class WorksController
{

   public function actionWork()
   {
      // Список проектов
      $worksList = Works::getWorksList();
      // Подключаем визуализацию
      require_once(ROOT . '/views/works/works.php');
      return true;
   }
}
