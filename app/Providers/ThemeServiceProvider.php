<?php

namespace App\Providers;
use Onedb\Support\ServiceProvider;
use Onedb\Support\Theme;

class ThemeServiceProvider extends ServiceProvider {
    public static function register() {
        Theme::setLayout(dirname(__DIR__, 2).'/resources/views/layouts/app.php');        
    }
}