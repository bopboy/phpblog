<?php

use Onedb\Application;

$app = new Application([
    \App\Providers\RouteServiceProvider::class,
    \App\Providers\DatabaseServiceProvider::class,
    \App\Providers\SessionServiceProvider::class,
    \App\Providers\ThemeServiceProvider::class,
    \App\Providers\RouteServiceProvider::class,
]);

return $app;