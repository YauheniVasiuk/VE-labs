<?php

class Works
{

   public static function getWorksList()
   {
      // Подключение БД
      $db = Db::getConnection();
      // Список проетов
      $worksList = $db->query("SELECT * FROM works ORDER BY id ASC");
      return $worksList->fetchAll(PDO::FETCH_ASSOC);
   }
}
