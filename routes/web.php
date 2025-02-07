<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', function () {
    $path = public_path('../public/index.html');
    return File::exists($path) ? Response::file($path) : abort(404);
});