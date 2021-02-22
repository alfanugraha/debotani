<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
    return view('index');
});


Route::get('/about', function () {
    $nama = 'Alfa Nugraha';
    return view('about', ['nama' => $nama]);
});

//Route::get('/pegawai', [PegawaiController::class, 'index']); 
Route::get('/student', [StudentController::class, 'index']);
Route::get('/student/create', [StudentController::class, 'create']);
Route::get('/student/{id}', [StudentController::class, 'show']);
Route::post('/student', [StudentController::class, 'store']);
Route::delete('/student/{id}', [StudentController::class, 'destroy']);
Route::get('/student/{id}/edit', [StudentController::class, 'edit']);
Route::patch('student/{id}', [StudentController::class, 'update']);

// Route::resource('student', StudentController::class);