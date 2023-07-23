<?php

class WorksController
{

   public function actionWork()
   {
      $worksList = Works::getWorksList();
      require_once(ROOT . '/views/works/works.php');
      return true;
   }
}
