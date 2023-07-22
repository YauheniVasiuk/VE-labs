<?php

class GeneralController
{
   public function actionIndex()
   {
      $works = array();
      $works = General::getGeneralWorks();

      include_once(ROOT . '/views/site/index.php');

      return true;
   }
}
