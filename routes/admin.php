<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| ROTA DOS ADMINS
|--------------------------------------------------------------------------
|
|
 */

Route::get('/', function (Request $res) {
    return 'adminok';
});
