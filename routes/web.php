<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
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

Route::get('/',HomeController::class);

Route::resource('cursos',CursoController::class);

/* route::controller(CursoController::class)->group(function(){

    Route::get('cursos','index')->name('cursos.index');
    Route::get('cursos/create','create')->name('cursos.create');
    Route::get('cursos/{curso}','show')->name('cursos.show');
    Route::post('cursos','store')->name('cursos.store');
    Route::get('cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('cursos/{curso}','update')->name('cursos.update');
    Route::delete('cursos/{curso}','destroy')->name('cursos.destroy');
});

 */
 /*
Route::get('cursos/{curso}/{categoria?}', function ($curso,$categoria=null) {
    if ($categoria) {

        return "bienvenido al $curso , de la categoria $categoria";
    }
    else {
        return"bienvenido al curso: $curso";
        
    }
});
*/