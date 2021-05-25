<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\LigneCommandeController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('client', ClientController::class);
Route::resource('articles', ArticleController::class);
Route::resource('commande', CommandeController::class);
Route::resource('lignecommande', LigneCommandeController::class);
