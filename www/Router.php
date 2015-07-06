<?php
include_once 'account.routes.php';
class Router
{

    private static $routes = array();

    private function __constructor()
    {
    }

    public static function get($pattern, $callback)
    {
        self::set('GET', $pattern, $callback);
    }

    public static function post($pattern, $callback)
    {
        self::set('POST', $pattern, $callback);
    }

    private static function set($type, $pattern, $callback)
    {
        if (!function_exists($callback)) {
            new Exception("Method $callback not exists");
        }
        self::$routes[$type][$pattern] = $callback;
    }


    public static function process($method, $uri)
    {
        if (in_array($method, array('GET', 'POST'))) {
            new Exception("Request method should be GET or POST");
        }
        // Выполнение роутинга
        // Используем роуты $routes['GET'] или $routes['POST']  в зависимости от метода HTTP.
        $active_routes = self::$routes[$method];

        // Для всех роутов
        foreach ($active_routes as $pattern => $callback) {
            // Если REQUEST_URI соответствует шаблону - вызываем функцию
            if (preg_match_all("/$pattern/", $uri, $matches)) {
                array_shift($matches);
                $id = array();
                foreach ($matches as $match) {
                    $id[] = $match[0];
                }
                return call_user_func_array($callback, $id);
            }
        }
    }
}

?>