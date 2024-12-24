<?php

namespace aminebajjidev\php_simple_router;

class Router
{
    public static function handle($method = 'GET', $path = '/', $localFileOrFunc = '')
    {

        $currentMethod = $_SERVER['REQUEST_METHOD'];
        $currentUri = $_SERVER['REQUEST_URI'];
        if ($currentMethod != $method) {
            return false;
        }
        $root = '';
        $pattern = '#^' . $root . $path . '$#siD';
        if (preg_match($pattern, $currentUri)) {
            if (is_callable($localFileOrFunc)) {
                $localFileOrFunc();
            } else {
                require_once $localFileOrFunc;
            }
            exit();
        }
        return false;
    }

    public static function get($path = '/', $localFileOrFunc = '')
    {
        return self::handle('GET', $path, $localFileOrFunc);
    }
    public static function POST($path = '/', $localFileOrFunc = '')
    {
        return self::handle('POST', $path, $localFileOrFunc);
    }
    public static function put($path = '/', $localFileOrFunc = '')
    {
        return self::handle('PUT', $path, $localFileOrFunc);
    }
    public static function patch($path = '/', $localFileOrFunc = '')
    {
        return self::handle('PATCH', $path, $localFileOrFunc);
    }
    public static function delete($path = '/', $localFileOrFunc = '')
    {
        return self::handle('DELETE', $path, $localFileOrFunc);
    }
}
