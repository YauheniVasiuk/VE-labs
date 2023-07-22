<?php

class Router
{
   private $routes;

   public function __construct()
   {
      // Пути
      $this->routes = include(ROOT . '/config/routes.php');
   }
   // Uri 
   private function getURI()
   {
      if (!empty($_SERVER['REQUEST_URI'])) {
         return trim($_SERVER['REQUEST_URI'], '/');
      }
   }
   // Start Method
   public function run()
   {
      // URI
      $uri = $this->getURI();

      foreach ($this->routes as $uriPattern => $path) {
         // Сравниваем uri с паттерном
         if (preg_match("~$uriPattern~", $uri)) {
            // Внутренний путь
            $internalRoute = preg_replace("~$uriPattern~", $path, $uri);
            // Controller action paramenters
            $segments = explode('/', $internalRoute);
            $controllerName = ucfirst(array_shift($segments)) . 'Controller';
            $actionName = 'action' . ucfirst(array_shift($segments));
            $parameters = $segments;
            // controllerFile object
            $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
            if (is_file($controllerFile)) {
               include($controllerFile);
            }
            $controllerObject = new $controllerName;
            // start
            $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
            if ($result != false) {
               break;
            }
         }
      }
   }
}
