<?php

use App\Http\Controllers\PrincipalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropiedadeDatesController;


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
    return view('principal');
});





Route::get('/principal','PrincipalController');

Route::get('/estatuto','EstatuteController');

Route::get('/servicio','ServiceController');

Route::get('/personal','PersonalController');

Route::get('/consulta', 'LoginClientController');

Route::post('propiedaddatos',[PropiedadeDatesController::class,'index']);

Route::get('/chat','ChatController');

