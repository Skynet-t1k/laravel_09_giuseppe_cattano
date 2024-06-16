<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\MessageController;


//PublicController
Route::get('/', [PublicController::class, ('homepage')])->name('homepage');


//MessageComtroller
Route::get('/message.create', [MessageController::class, ('message_create')])->name('message.create')->middleware('auth');
Route::post('/message.store', [MessageController::class, ('message_store')])->name('message.store')->middleware('auth');

Route::get('/message.view', [MessageController::class, ('message_view')])->name('message.view');
