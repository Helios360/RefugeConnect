<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AnimalController;

Route::get('/', [IndexController::class, 'index'])->name('home');

Route::prefix('animal')->group(function (){
    Route::get('/create', [AnimalController::class, 'create'])->name('animal.create');
    Route::get('/update/{id}', [AnimalController::class, 'update'])
        ->whereNumber('id')
        ->name('animal.update');
    Route::get('/delete/{id}', [AnimalController::class, 'delete'])
        ->whereNumber('id')
        ->name('animal.delete');
    Route::get('/{id}', [AnimalController::class, 'read'])
        ->whereNumber('id')
        ->name('animal.read');
});

Route::fallback(function(){
    return view('errors/not-found');
});
