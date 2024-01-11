<?php

namespace App\Providers;

use Onedb\Support\ServiceProvider;
use Onedb\Routing\Route;

class RouteServiceProvider extends ServiceProvider {
    public static function register() {
        require_once dirname(__DIR__,2).'/routes/web.php';
    }
    public static function boot() {
        Route::run();
    }
}