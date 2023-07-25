<?php

class SkillsController
{

   public function actionSkill()
   {
      // Список проектов
      $skillsList = Skills::getSkillsList();
      // Подключаем визуализацию
      require_once(ROOT . '/views/skills/skills.php');
      return true;
   }
}
