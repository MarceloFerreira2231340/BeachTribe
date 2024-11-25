<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/calendario', [PageController::class, 'calendarioDeAulas'])->name('calendario');

Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/surf', [PageController::class, 'surf'])->name('surf');

