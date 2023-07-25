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
}
