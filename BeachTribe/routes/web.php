<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use illuminate\support\facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\AboutUsController;

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

Route::get('/calendario', [ClassController::class, 'calendario'])->name('calendario');

Route::get('/eventos', [EventController::class, 'index'])->name('eventos');

Route::get('/modalidades', [SportController::class, 'index'])->name('modalidades');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/surf', [PageController::class, 'surf'])->name('surf');

Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/admin', [PageController::class, 'admindashboard'])->name('admin.dashboard');

Route::resource('admin/users', UserController::class, ['as' => 'admin']);

Route::resource('admin/classes', ClassController::class, ['as' => 'admin']);

Route::resource('admin/sports', SportController::class, ['as' => 'admin']);

Route::resource('admin/events', EventController::class, ['as' => 'admin']);

Route::resource('admin/contacts', ContactsController::class, ['as' => 'admin']);

Route::resource('admin/aboutus', AboutUsController::class, ['as' => 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
