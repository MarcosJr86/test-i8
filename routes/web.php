<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\extraerAPIController;

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

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|Ruta  para invocar el controlador que estrae los datos desde una API
| */
Route::get('/extraer-api', [extraerAPIController::class, 'extraerAPI'])->name("extraer-api");
