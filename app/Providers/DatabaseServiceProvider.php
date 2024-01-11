<?php

namespace App\Providers;
use Onedb\Support\ServiceProvider;
use Onedb\Database\Adaptor;


class DatabaseServiceProvider extends ServiceProvider {
    public static function register() {
        // require_once '../../config.php';
        // Adaptor::setup('mysql:dbname='.$config['dbname'], $config['dbuser'], $config['password']);
        Adaptor::setup('mysql:dbname=lectures_data_db', 'root', 'mush0000');
    }
}