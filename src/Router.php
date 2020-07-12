<?php

namespace Saintmim\Autorouter;

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\URL;

class Router
{

    public static function r()
    {
        Route::get('rezam', function() {
            return 'x hey, it is working';
        });
    }
}