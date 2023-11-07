<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PiantaController;
use App\Http\Controllers\FioreController;
use App\Http\Controllers\PublicController;

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
Route::get('/',function(){
    return view('index');
})->name('index');

Route::get('/piante',[PiantaController::class,'index'])->name('index.piante');

Route::get('/fiori',[FioreController::class, 'index'])->name('index.fiori');

// rotta della pagina del detaglio delle piante 
Route::get('/piante/detail/{name}',[PiantaController::class, 'tipo'])->name('tipo.piante');
// rotta  della paggina deldetaglio fiori
Route::get('/fiori/detail/{name}', [FioreController::class, 'tipo'])->name('tipo.fiori');

// rotta per visuualizzareun form per conttatare
Route::get('/contact-us',[PublicController::class,'form'])->name('form');
Route::post('/contact-email',[PublicController::class,'sendEmail'])->name('send.email');