<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index']);


Route::get('fotos/{numero?}', function($numero = "sin numero"){
    return 'estas en fotos '. $numero;
}) ->where('numero', '[0-9]+'); // se peude hacer asi aunque no es recomendable mezclar logica


Route::get('galeria', [PagesController::class, 'galeria']) ->name('foto'); // se usan controladores

Route::get('noticias',  [PagesController::class, 'noticias'])->name('noticias');


Route::get('nosotros/{nombre?}', [PagesController::class, 'nosotros'])->name('nosotros');
// Route::view('galeria', 'fotos', ['numero' => 125]);

