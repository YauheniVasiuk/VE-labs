<?php

class General
{
   public static function getGeneralWorks()
   {
      // Подклоючение БД 
      $db = Db::getConnection();
      // Список выполненных проектов
      $result = $db->query('SELECT * FROM works ORDER BY id ASC LIMIT 3');
      return $generalWorks = $result->fetchAll(PDO::FETCH_ASSOC);
   }
}
