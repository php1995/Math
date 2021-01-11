<?php

/**
 * Class Router
 */
class Router
{
    /**
     * @var mixed
     */
    private $routes;

    /**
     * Router constructor.
     */
    public function __construct()
    {
        $routesPath = ROOT . '/components/config/routes.php';
        $this->routes = include($routesPath);
    }

    /**
     * @return string
     */
    private function getURI()
    {
        if (!empty($_SERVER['REQUEST_URI'])) {
            return trim($_SERVER['REQUEST_URI'], '/');
        }
    }

    public function run()
    {
        $uri = $this->getURI();

        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $regiments = explode('/', $path);
                $cname = array_shift($regiments);
                $controllerName = $cname . 'Controller';
                $controllerName = ucfirst($controllerName);

                $actionName = 'action' . ucfirst(array_shift($regiments));

                $geometryControllerFile = ROOT . '/controllers/geometry/' . $controllerName . '.php';
                $algebraControllerFile = ROOT . '/controllers/algebra/' . $controllerName . '.php';
                $otherControllerFile = ROOT . '/controllers/' . $controllerName . '.php';

                if (file_exists($geometryControllerFile)) {
                    include_once($geometryControllerFile);
                }
                if (file_exists($algebraControllerFile)) {
                    include_once($algebraControllerFile);
                }
                if (file_exists($otherControllerFile)) {
                    include_once($otherControllerFile);
                }

                $controllerObject = new $controllerName($cname);
                $result = $controllerObject->$actionName();
                if ($result != null) {
                    break;
                }
            }
        }
    }
}

