<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TempahanKenderaanController;
use App\Http\Controllers\UserController;
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
Route::get('/', function(){
    return redirect('/login');
});

Route::get('tempahan-kenderaan', [TempahanKenderaanController::class, 'index']);
Route::match(['get','post'], 'tempahan-kenderaan2', [TempahanKenderaanController::class, 'index']);

/**
 * Route Student
 */
Route::middleware('auth')->group(function(){
    Route::prefix('student')->as('student.')->group(function(){
        Route::get('/',[StudentController::class, 'index'])->name('index')
        ->middleware('role:superadmin');
        Route::get('/create',[StudentController::class, 'create'])->name('create');
        Route::get('/show/{id}',[StudentController::class, 'show'])->name('show');
        Route::get('/edit/{id}',[StudentController::class, 'edit'])->name('edit');

        Route::post('/store',[StudentController::class, 'store'])->name('store');
        Route::post('/update/{id}',[StudentController::class, 'update'])->name('update');
    });

    Route::prefix('course')->as('course.')->group(function(){
        Route::get('/', [CourseController::class, 'index'])->name('index');
        Route::get('/show/{id}',[CourseController::class, 'show'])->name('show');
        Route::get('/edit/{id}',[CourseController::class, 'edit'])->name('edit');

        Route::post('/update/{id}',[CourseController::class, 'update'])->name('update');
    });

    Route::prefix('user')->as('user.')->group(function(){
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/store', [UserController::class, 'store'])->name('store');
        Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
    });
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
