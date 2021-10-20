<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TempahanKenderaanController;
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

/**
 *
 * get
 * post
 * any
 * match []
 * delete
 * d
 */
Route::get('tempahan-kenderaan', [TempahanKenderaanController::class, 'index']);
Route::match(['get','post'], 'tempahan-kenderaan2', [TempahanKenderaanController::class, 'index']);

/**
 * Route Student
 */
Route::prefix('student')->as('student.')->group(function(){
    Route::get('/',[StudentController::class, 'index'])->name('index');
    Route::get('/create',[StudentController::class, 'create'])->name('create');
    Route::get('/show/{id}',[StudentController::class, 'show'])->name('show');
    Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');

    Route::post('/store',[StudentController::class, 'store'])->name('store');
    Route::post('/update/{id}',[StudentController::class, 'update'])->name('update');
});

Route::prefix('course')->as('course.')->group(function(){
    Route::get('/', [CourseController::class, 'index'])->name('index');
});

// Route::middleware('auth')->group(function(){
//     Route::prefix('student')->group(function(){
//         Route::get('/',[StudentController::class, 'index']);
//         Route::get('/create',[StudentController::class, 'create']);
//         Route::get('/show/{id}',[StudentController::class, 'show']);
//         Route::get('/edit/{id}',[StudentController::class, 'edit']);

//         Route::post('/store',[StudentController::class, 'store'])
//         ->name('student.store');
//         Route::post('/update/{id}',[StudentController::class, 'update']);
//     });
// });
