<?php

namespace App\Controllers;

use App\Services\IndexService;
use Onedb\Support\Theme;

class IndexController {
    public static function index() {
        $page = filter_input(INPUT_GET, 'page', FILTER_VALIDATE_INT) ?: 0;
        return Theme::view('index',[
            'posts' => IndexService::getPosts($page, 3)
        ]);
    }
}