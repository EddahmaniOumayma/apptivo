<?php

use App\Http\Controllers\admin\FonctionnaireController;
use App\Http\Controllers\CadreController;
use App\Http\Controllers\CorpController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\IndiceController;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {

  
    
});
Route::resource('fonctionnaires', FonctionnaireController::class);
Route::resource('corps', CorpController::class);
Route::resource('cadres', CadreController::class);
Route::resource('grades', GradeController::class);
Route::resource('indices', IndiceController::class);
