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

Route::get('/', function () {
    $greeting = "HELLO WORD";
    return view('home', compact("greeting"));
})->name("home");

Route::get('/lista_spesa', function () {
    $shopping_list = ["uova", "pane", "cocacola", "vino", "telefono a riccardo", "fileinfo ad andera", "compare una pizza ad Andy"];
    return view('list', compact("shopping_list"));
})->name("shopping_list");
