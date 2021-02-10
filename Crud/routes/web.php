<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('home');
Route::post('/',[PagesController::class, 'crear'])-> name('notas.crear');

Route::get('/detalles/{id}', [PagesController::class, 'detalle']) ->name('notas.detalle');


Route::get('/editar/{id}',[PagesController::class, 'editar'])-> name('notas.editar');
Route::put('/editar/{id}',[PagesController::class, 'update'])-> name('notas.update');


Route::delete('/eliminar/{id}',[PagesController::class, 'eliminar'])-> name('notas.eliminar');
