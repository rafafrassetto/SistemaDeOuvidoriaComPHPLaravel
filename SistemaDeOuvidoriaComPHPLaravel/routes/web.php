<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('login');
});


Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');


Route::get('/ouvidoria', function () {
    return redirect('/Pages/Ouvidoria/index.html');
});
