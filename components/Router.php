<?php

class Router
{

    private $routes;

    public function __construct()
    {
        $routesPath = DIR . 'config/routes.php';
        $this->routes = include($routesPath);
    }

    // Возвращает строку запроса
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/'); // trim() убирает определенные символы в начале и конце строки
        }
    }

    public function run()
    {
        // Получить строку запроса
        $uri = $this->getURI();


        // Проверить наличие такого запроса в routes.php

        foreach ($this->routes as $uriPattern => $path) {

            //Сравнить $uriPattern и $uri
            if (preg_match("~$uriPattern~", $uri)) {

                // Получаем внутренний путь из внешнего согласно правилу 
                $internalRoute = preg_replace("~$uriPattern~", $path, $uri);

                $segments = explode('/', $internalRoute);
                // print_r($segments);
                $controllerName = array_shift($segments) . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($segments));

                $parameters = $segments;

                // Подключить файл класса-контроллера
                $controllerFile = DIR . 'controllers/' . $controllerName . '.php';

                if (file_exists($controllerFile)) {
                    include_once($controllerFile);
                }

                // Создать обьект скласса ...Контроллер, вызвать метод action... в этом классе
                $controllerObject = new $controllerName;

                $result = call_user_func_array(array($controllerObject, $actionName), $parameters);
                if ($result) {
                    break;
                } else {
                    $template = DIR . 'views/404.php';
                    require_once(DIR . 'views/wrapper.php');
                    break;
                }
            }
        }
    }
}
