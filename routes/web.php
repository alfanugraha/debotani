<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AmanahBadanUsahaController;
use App\Http\Controllers\AmanahController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TabunganController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BimapanController;
use App\Http\Controllers\DepositoBadanUsahaController;
use App\Http\Controllers\DepositoIndividuController;
use App\Http\Controllers\RahmahBadanUsahaController;
use App\Http\Controllers\RahmahController;
use App\Http\Controllers\SimapanController;

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

Route::get('/tabungan/jenis', function () {
    return view('tabungan.jenis');
});

Route::get('/tabungan/jenis/individu', function () {
    return view('tabungan.individu');
});

Route::get('/tabungan/jenis/badan-usaha', function () {
    return view('tabungan.busaha');
});

Route::get('/deposito/jenis', function () {
    return view('deposito.jenis');
});

Route::get('/deposito/jenis/individu', function () {
    return view('deposito.individu');
});

Route::get('/deposito/jenis/badan-usaha', function () {
    return view('deposito.busaha');
});


Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function(){
    Route::get('admin', [AdminController::class, 'index'])->name('admin');

    Route::get('admin/rahmah', [AdminController::class, 'rahmahAll']);
    Route::get('admin/rahmah/{id}', [AdminController::class, 'rahmahShow']);
    Route::get('rahmah/exportxls', [AdminController::class, 'rahmahXls']);
    Route::get('rahmah/exportPdf', [AdminController::class, 'rahmahPdf']);

    Route::get('admin/amanah', [AdminController::class, 'amanahAll']);
    Route::get('admin/amanah/{id}', [AdminController::class, 'amanahShow']);
    Route::get('amanah/exportxls', [AdminController::class, 'amanahXls']);
    Route::get('amanah/exportPdf', [AdminController::class, 'amanahPdf']);

    Route::get('admin/simapan', [AdminController::class, 'simapanAll']);
    Route::get('admin/simapan/{id}', [AdminController::class, 'simapanShow']);
    Route::get('simapan/exportxls', [AdminController::class, 'simapanXls']);
    Route::get('simapan/exportPdf', [AdminController::class, 'simapanPdf']);

    Route::get('admin/bimapan', [AdminController::class, 'bimapanAll']);
    Route::get('admin/bimapan/{id}', [AdminController::class, 'bimapanShow']);
    Route::get('bimapan/exportxls', [AdminController::class, 'bimapanXls']);
    Route::get('bimapan/exportPdf', [AdminController::class, 'bimapanPdf']);

    Route::get('admin/individu', [AdminController::class, 'depositoRahmahAll']);
    Route::get('admin/individu/{id}', [AdminController::class, 'depositoRahmahShow']);
    Route::get('individu/exportxls', [AdminController::class, 'depositoRahmahXls']);
    Route::get('individu/exportPdf', [AdminController::class, 'depositoRahmahPdf']);

    Route::get('admin/prima', [AdminController::class, 'depositoPrimaAll']);
    Route::get('admin/prima/{id}', [AdminController::class, 'depositoPrimaShow']);
    Route::get('prima/exportxls', [AdminController::class, 'depositoPrimaXls']);
    Route::get('prima/exportPdf', [AdminController::class, 'depositoPrimaPdf']);

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});

Route::get('/tabungan/jenis/individu/rahmah', [RahmahController::class, 'create']);
Route::post('/tabungan/jenis/individu/rahmah', [RahmahController::class, 'store']);

Route::get('/tabungan/jenis/individu/amanah', [AmanahController::class, 'create']);
Route::post('/tabungan/jenis/individu/amanah', [AmanahController::class, 'store']);

Route::get('/tabungan/jenis/individu/simapan', [SimapanController::class, 'create']);
Route::post('/tabungan/jenis/individu/simapan', [SimapanController::class, 'store']);

Route::get('/tabungan/jenis/individu/bimapan', [BimapanController::class, 'create']);
Route::post('/tabungan/jenis/individu/bimapan', [BimapanController::class, 'store']);

Route::get('/tabungan/jenis/badan-usaha/rahmah', [RahmahBadanUsahaController::class, 'create']);
Route::post('/tabungan/jenis/badan-usaha/rahmah', [RahmahBadanUsahaController::class, 'store']);

Route::get('/tabungan/jenis/badan-usaha/amanah', [AmanahBadanUsahaController::class, 'create']);
Route::post('/tabungan/jenis/badan-usaha/amanah', [AmanahBadanUsahaController::class, 'store']);

Route::get('/deposito/jenis/individu/create', [DepositoIndividuController::class, 'create']);
Route::post('/deposito/jenis/individu/create', [DepositoIndividuController::class, 'store']);

Route::get('/deposito/jenis/badan-usaha/create', [DepositoBadanUsahaController::class, 'create']);
Route::post('/deposito/jenis/badan-usaha/create', [DepositoBadanUsahaController::class, 'store']);

