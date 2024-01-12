<?php

use Onedb\Application;

$app = new Application([
    // \App\Providers\ErrorServiceProvider::class,
    \App\Providers\RouteServiceProvider::class,
    \App\Providers\SessionServiceProvider::class,
    \App\Providers\DatabaseServiceProvider::class,
    \App\Providers\ThemeServiceProvider::class,
]);

return $app;