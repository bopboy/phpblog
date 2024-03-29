<?php

namespace App\Providers;

use Onedb\Support\ServiceProvider;
use Onedb\Session\DatabaseSessionHandler;

class SessionServiceProvider extends ServiceProvider {
    public static function register() {
        session_set_save_handler(new DatabaseSessionHandler());
    }
    public static function boot() {
        session_start();
    }
}