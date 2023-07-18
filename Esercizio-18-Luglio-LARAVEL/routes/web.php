<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\DetailsController;
use App\Http\Controllers\ProdottiController;

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

Route::get('/', [PublicController::class, 'homepage'] )->name('homepage');

Route::get('/pagina-prodotti',[ProdottiController::class, 'index'] )->name('pagina-prodotti');

Route::get('/pagina-dettaglio',[DetailsController::class, 'index'] )->name('pagina-dettaglio');

Route::get('/dettaglio-1', function(){
    return view ('dettaglio-1');
})->name('dettaglio-1');

Route::get('/dettaglio-2', function(){
    return view ('dettaglio-2');
})->name('dettaglio-2');

Route::get('/dettaglio-3', function(){
    return view ('dettaglio-3');
})->name('dettaglio-3');

Route::get('/dettaglio-4', function(){
    return view ('dettaglio-4');
})->name('dettaglio-4');

Route::get('/dettaglio-5', function(){
    return view ('dettaglio-5');
})->name('dettaglio-5');

Route::get('/dettaglio-6', function(){
    return view ('dettaglio-6');
})->name('dettaglio-6');

Route::get('/dettaglio-7', function(){
    return view ('dettaglio-7');
})->name('dettaglio-7');

Route::get('/dettaglio-8', function(){
    return view ('dettaglio-8');
})->name('dettaglio-8');

Route::get('/dettaglio-9', function(){
    return view ('dettaglio-9');
})->name('dettaglio-9');

