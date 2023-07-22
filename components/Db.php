<?php

class Db
{

   public static function getConnection()
   {
      $params = include(ROOT . '/config/db_params.php');
      return $db = new PDO("mysql:host={$params['host']};dbname={$params['dbname']}", $params['user'], $params['password']);
   }
}
