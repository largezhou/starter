<?php

namespace App\BodyRouter;

use Illuminate\Routing\Route;

class Router extends \Illuminate\Routing\Router
{
    protected static string $actionKey;

    public static function setActionKey(string $actionKey)
    {
        static::$actionKey = $actionKey;
    }

    public static function getActionKey(): string
    {
        return static::$actionKey;
    }

    /**
     * @param string $action
     * @param callable|array|string|null $handler
     *
     * @return Route
     */
    public function action(string $action, callable|array|string|null $handler): Route
    {
        return $this->addRoute('POST', $action, $handler);
    }
}
