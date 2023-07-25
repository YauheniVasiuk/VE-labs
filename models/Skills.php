<?php

class Skills
{

   public static function getSkillsList()
   {
      // Подключение БД
      $db = Db::getConnection();
      // Список скилов
      $skillsList = $db->query("SELECT * FROM skills ORDER BY id_skill ASC");
      return $skillsList->fetchAll(PDO::FETCH_ASSOC);
   }
}
