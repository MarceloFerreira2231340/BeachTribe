<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\UserController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClassSubscriptionController;

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

Route::get('/eventos', [PageController::class, 'eventos'])->name('eventos');
Route::get('/aboutEventos/{id}', [EventController::class, 'showEvent'])->name('abouteventos');

Route::get('/modalidades', [PageController::class, 'modalidades'])->name('modalidades');

Route::get('/contactos', [PageController::class, 'contactos'])->name('contactos');

Route::get('/surf', [PageController::class, 'surf'])->name('surf');

Route::get('/aboutus', [AboutUsController::class, 'index'])->name('aboutus');

Route::get('/admin', [PageController::class, 'admindashboard'])->name('admin.dashboard');

Route::post('/inscrever', [ClassSubscriptionController::class, 'store'])->name('class_subscription.store');

Route::resource('admin/users', UserController::class, ['as' => 'admin']);

Route::resource('admin/classes', ClassController::class, ['as' => 'admin','parameters' => ['classes' => 'class_']]);

Route::resource('admin/sports', SportController::class, ['as' => 'admin']);

Route::resource('admin/events', EventController::class, ['as' => 'admin']);

Route::resource('admin/contacts', ContactController::class, ['as' => 'admin']);

Route::resource('admin/aboutus', AboutUsController::class, ['as' => 'admin']);

Route::resource('admin/products', ProductController::class, ['as' => 'admin']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
