<?php

use app\Http\Controllers\PersonasController;
use app\Http\Controllers\SedeController;
use app\Http\Controllers\AlumnoController;

use app\Http\Controllers\CursoController;

use app\Http\Controllers\RegisterController;
//use app\Http\Controllers\AdminController;
//use app\Http\Controllers\SessionsController;



use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout/home');
});  //->middleware('auth');

//Profesor
    Route::get('/index', [\App\Http\Controllers\PersonasController::class, 'index'])->name('personas.index');
    Route::get('/create', [\App\Http\Controllers\PersonasController::class, 'create'])->name('personas.create');
    Route::post('/store', [\App\Http\Controllers\PersonasController::class, 'store'])->name('personas.store');
    Route::get('/edit/{id}', [\App\Http\Controllers\PersonasController::class, 'edit'])->name('personas.edit');
    Route::put('/update/{id}', [\App\Http\Controllers\PersonasController::class, 'update'])->name('personas.update');
    Route::get('/show/{id}', [\App\Http\Controllers\PersonasController::class, 'show'])->name('personas.show');
    Route::delete('/destroy/{id}', [\App\Http\Controllers\PersonasController::class, 'destroy'])->name('personas.destroy');

//Sede
    Route::get('/indexs', [\App\Http\Controllers\SedeController::class, 'indexs'])->name('sedes.indexs');
    Route::get('/creates', [\App\Http\Controllers\SedeController::class, 'creates'])->name('sedes.creates');
    Route::post('/stores', [\App\Http\Controllers\SedeController::class, 'stores'])->name('sedes.stores');
    Route::get('/edits/{id}', [\App\Http\Controllers\SedeController::class, 'edits'])->name('sedes.edits');
    Route::put('/updates/{id}', [\App\Http\Controllers\SedeController::class, 'updates'])->name('sedes.updates');
    Route::get('/shows/{id}', [\App\Http\Controllers\SedeController::class, 'shows'])->name('sedes.shows');
    Route::delete('/destroys/{id}', [\App\Http\Controllers\SedeController::class, 'destroys'])->name('sedes.destroys');

//Alumno
    Route::get('/indexa', [\App\Http\Controllers\AlumnoController::class, 'indexa'])->name('alumnos.indexa');
    Route::get('/createa', [\App\Http\Controllers\AlumnoController::class, 'createa'])->name('alumnos.createa');
    Route::post('/storea', [\App\Http\Controllers\AlumnoController::class, 'storea'])->name('alumnos.storea');
    Route::get('/edita/{id}', [\App\Http\Controllers\AlumnoController::class, 'edita'])->name('alumnos.edita');
    Route::put('/updatea/{id}', [\App\Http\Controllers\AlumnoController::class, 'updatea'])->name('alumnos.updatea');
    Route::get('/showa/{id}', [\App\Http\Controllers\AlumnoController::class, 'showa'])->name('alumnos.showa');
    Route::delete('/destroya/{id}', [\App\Http\Controllers\AlumnoController::class, 'destroya'])->name('alumnos.destroya');


//Curso //m=mercancias
    Route::get('/indexm', [\App\Http\Controllers\CursoController::class, 'indexm'])->name('cursos.indexm');
    Route::get('/createm', [\App\Http\Controllers\CursoController::class, 'createm'])->name('cursos.createm');
    Route::post('/storem', [\App\Http\Controllers\CursoController::class, 'storem'])->name('cursos.storem');
    Route::get('/editm/{id}', [\App\Http\Controllers\CursoController::class, 'editm'])->name('cursos.editm');
    Route::put('/updatem/{id}', [\App\Http\Controllers\CursoController::class, 'updatem'])->name('cursos.updatem');
    Route::get('/showm/{id}', [\App\Http\Controllers\CursoController::class, 'showm'])->name('cursos.showm');
    Route::delete('/destroym/{id}', [\App\Http\Controllers\CursoController::class, 'destroym'])->name('cursos.destroym');

// Registro
Route::get('/showregis', [\App\Http\Controllers\RegisterController::class, 'showregis'])->name('registros/showregis');
Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'register'])->name('registros/register');

// Login























//registros ANTIGUOS
//Route::get('/', function () {
//    return view('home');
//})->middleware('auth');

    /*Route::get('/register', [\App\Http\Controllers\RegisterController::class, 'create'])->middleware('guest')->name('register.index');
    Route::post('/register', [\App\Http\Controllers\RegisterController::class, 'store'])->name('auth/register');

    Route::get('/login', [\App\Http\Controllers\SessionsController::class, 'create'])->middleware('guest')->name('login.index');
    Route::post('/login', [\App\Http\Controllers\SessionsController::class, 'store'])->name('login.store');
    Route::get('/logout', [\App\Http\Controllers\SessionsController::class, 'destroy'])->middleware('auth')->name('login.destroy');

    Route::get('/admin', [\App\Http\Controllers\AdminController::class, 'index'])->middleware('auth.admin')->name('admin.index');
*/


