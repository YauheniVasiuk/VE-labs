<?php

class User
{
   public static function checkEmail($email)
   {
      if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
         return true;
      }
      return false;
   }
}
