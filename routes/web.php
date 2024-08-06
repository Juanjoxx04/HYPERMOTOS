<?php

use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;
use Psy\Readline\Hoa\ConsoleCursor;

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

Route::view('/', 'welcome');

// CRUD 

Route::resource('productos', ProductoController::class); // crea las 7 rutas del CRUD