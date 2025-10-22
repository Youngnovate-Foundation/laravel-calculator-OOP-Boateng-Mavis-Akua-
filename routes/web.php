<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalculatorOOPController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/calculator', [CalculatorOOPController::class, 'index']);
Route::post('/calculate', [CalculatorOOPController::class, 'calculate'])->name('calculate');
