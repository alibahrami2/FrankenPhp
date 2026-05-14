<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/api/message', function () {
    return response()->json([
        'message' => 'Hello from your Laravel backend, served by FrankenPHP!',
        'timestamp' => now()
    ]);
})->name('api.message');
