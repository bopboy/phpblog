<?php

namespace App\Controllers;

use Onedb\Support\Theme;

class IndexController {
    public static function index() {
        // include dirname(__DIR__, 2).'/resources/index.php';
        return Theme::view('index');
    }
}