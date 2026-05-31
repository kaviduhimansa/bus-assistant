<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;

// Your new Admin URL
Route::get('/admin/routes', [RouteController::class, 'index'])->name('routes.index');

Route::get('/', function () {
    return view('welcome');
});