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
    $Productos = [
        ["Nombre" => "Casco SHAFT", "Precio" => "270.000", "imagen" => "SHAFT.webp"],
        ["Nombre" => "YAMAHA MT-09", "Precio" => "70.000.000","imagen" => "MT-09.jpg"],
        ["Nombre" => "FRENO DISCO NISSIN", "Precio" => "770.000","imagen" => "FRENO NISSIN.jpg"],
        ["Nombre" => "KTM DUKE 990 v3", "Precio" => "27.000.000","imagen" => "KTM 990.webp"],
        ["Nombre" => "TRAJE LLUVIA AP", "Precio" => "170.000","imagen" => "TRAJE AP.webp"],
    ];

    $Nombre = "JUAN JOSÉ";

    return view("welcome",["Productos" => $Productos], ["Nombre" => $Nombre]);
    
});