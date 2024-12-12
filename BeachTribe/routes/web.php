<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use illuminate\support\facades\Auth;
use App\Http\Controllers\EventController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UcController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\CategoryController;

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

Route::get('/', [PageController::class, 'index'])->name('index');

Route::get('/calendario', [PageController::class, 'calendarioDeAulas'])->name('calendario');

Route::get('/eventos', [EventController::class, 'index'])->name('eventos');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/surf', [PageController::class, 'surf'])->name('surf');





Route::get('admin/', [PageController::class, 'admindashboard'])->name('admin.dashboard');