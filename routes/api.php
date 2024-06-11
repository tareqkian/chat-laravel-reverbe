<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth'])->group(function () {
    Route::get('/users', 'App\Http\Controllers\UsersController@index');

    Route::post('/messages', 'App\Http\Controllers\MessagesController@send');
    Route::get('/messages/{receiver_id}', 'App\Http\Controllers\MessagesController@chat');
});

require __DIR__.'/auth.php';