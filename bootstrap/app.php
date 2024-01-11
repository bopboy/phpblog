<?php

use Onedb\Application;

$app = new Application([
    \App\Providers\RouteServiceProvider::class
]);

return $app;