<?php


use App\Http\Controllers\HomeController;
use App\Http\Controllers\CA013Controller;
use App\Http\Controllers\CentroCostoController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::controller(HomeController::class)->group(function(){

    Route::get('/inicio', 'dashboard')->name('dashboard');
    Route::get('/prueba2', 'prueba2')->name('tablas');


});

Route::controller(CA013Controller::class)->group(function(){

    Route::get('/categoria', 'clasificadorCategoria')->name('categoria');
    Route::get('/linea', 'clasificadorLinea')->name('linea');
    Route::get('/marca', 'clasificadorMarca')->name('marca');
    Route::get('/familia', 'clasificadorFamilia')->name('familia');

    Route::post('/regcategoria', 'createCategoria')->name('createCategoria');
    Route::put('/edtcategoria', 'editCategoria')->name('editCategoria');
    Route::put('/bajacategoria', 'bajaCategoria')->name('bajaCategoria');
    Route::put('/recovercategoria', 'recoverCategoria')->name('recoverCategoria');

    Route::post('/reglinea', 'createLinea')->name('createLinea');
    Route::put('/edtlinea', 'editLinea')->name('editLinea');
    Route::put('/bajalinea', 'bajaLinea')->name('bajaLinea');
    Route::put('/recoverlinea', 'recoverLinea')->name('recoverLinea');

    Route::post('/regmarca', 'createMarca')->name('createMarca');
    Route::put('/edtmarca', 'editMarca')->name('editMarca');
    Route::put('/bajamarca', 'bajaMarca')->name('bajaMarca');
    Route::put('/recovermarca', 'recoverMarca')->name('recoverMarca');

    Route::post('/regfam', 'createFamilia')->name('createFamilia');
    Route::put('/edtfam', 'editFamilia')->name('editFamilia');
    Route::put('/bajafam', 'bajaFamilia')->name('bajaFamilia');
    Route::put('/recoverfam', 'recoverFamilia')->name('recoverFamilia');

});

Route::controller(CentroCostoController::class)->group(function(){

    Route::get('/centrocosto', 'viewCentroCosto')->name('viewCentroCosto');
    Route::post('/regcentrocosto', 'createCentroCosto')->name('createCentroCosto');
    Route::put('/edtcentrocosto', 'editCentroCosto')->name('editCentroCosto');
    Route::put('/bajacentrocosto', 'bajaCentroCosto')->name('bajaCentroCosto');
    Route::put('/recovercentrocosto', 'recoverCentroCosto')->name('recoverCentroCosto');

});


