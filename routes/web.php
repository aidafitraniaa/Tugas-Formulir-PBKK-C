<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

Route::get('/', [FormulirController::class, 'createForm']);
Route::post('/submit-form', [FormulirController::class, 'submitForm'])->name('submit-form');
Route::get('/hasil', [FormulirController::class, 'tampilkanHasil'])->name('hasil');


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('formulir');
});
