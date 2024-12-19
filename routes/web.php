<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RunController;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para la validación del RUN
Route::post('/validate-run', [RunController::class, 'validateRun'])->name('validate.run');

// Ruta para obtener el token CSRF
Route::get('/csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
})->name('csrf.token');
