<?php

namespace App\Middlewares;
use Onedb\Routing\Middleware;

class AuthMiddleware extends Middleware {
    public static function process() {
        if(array_key_exists('user', $_SESSION)) return true;
        return header('Location: /auth/login');
    }
}