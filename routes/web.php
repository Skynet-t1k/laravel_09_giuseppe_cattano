<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MessageController;

Route::get('/', [PublicController::class, ('homepage')])->name('homepage');

Route::get('/message.createview', [MessageController::class, ('createmessageview')])->name('message.createview');

Route::post('/message.create', [MessageController::class, ('createmessage')])->name('message.create');

Route::get('/message.view', [MessageController::class, ('viewmessage')])->name('message.view');
