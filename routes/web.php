<?php

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

Route::get('/', function () {
    
    $nombre = "JUAN JOSÉ";
    return view('welcome', ["nombre" => $nombre]);
    

});

Route:: get('/', function () {

    $productos = [
        ["nombre" =>"MT-09 SP", "Precio" => "90.000.000 COP"],
        ["nombre" =>"CASCO SHAFT", "Precio" => "750.000 COP"],
        ["nombre" =>"BOMBA DE FRENO BREMBO", "Precio" => "1.200.00 COP"],
    ];

    return view("List", ["productos" => $productos]);
});