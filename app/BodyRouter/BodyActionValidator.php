<?php

namespace App\BodyRouter;

use Illuminate\Http\Request;
use Illuminate\Routing\Matching\ValidatorInterface;
use Illuminate\Routing\Route;

class BodyActionValidator implements ValidatorInterface
{
    public function matches(Route $route, Request $request): bool
    {
        if (!$request->isMethod('POST')) {
            return false;
        }

        return $request->input(Router::getActionKey()) === $route->uri();
    }
}
