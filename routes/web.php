<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\AsalController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;   
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\DurasiController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\FungsiController;
use App\Http\Controllers\PesertaController;

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



Route::get('/',[Controller::class,'dashboard']);

//auth
//auth
Route::get('/loginIndex', [AuthController::class, 'loginIndex']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/loginIndexUser', [AuthController::class, 'loginIndexUser']);
Route::post('/loginUser', [AuthController::class, 'loginUser']);

Route::get('/registerIndex', [AuthController::class, 'registerIndex']);
Route::post('/register', [AuthController::class, 'register']);

Route::get('/registerIndexUser', [AuthController::class, 'registerIndexUser']);
Route::post('/registerUser', [AuthController::class, 'registerUser']);

Route::get('/logout', [AuthController::class, 'logout']);


Route::get('/asal',[AsalController::class,'get']);
Route::get('/asal/create',[AsalController::class,'create']);
Route::post('/asal/store',[AsalController::class,'store']);
Route::get('/asal/{id}/edit',[AsalController::class,'edit']);
Route::put('/asal/{id}',[AsalController::class,'update']);
Route::delete('/asal/{id}/destroy',[AsalController::class,'destroy']);


Route::get('/fungsi',[FungsiController::class,'get']);
Route::get('/fungsi/create',[FungsiController::class,'create']);
Route::post('/fungsi/store',[FungsiController::class,'store']);
Route::get('/fungsi/{id}/edit',[FungsiController::class,'edit']);
Route::put('/fungsi/{id}',[FungsiController::class,'update']);
Route::delete('/fungsi/{id}/destroy',[FungsiController::class,'destroy']);

Route::get('/durasi',[DurasiController::class,'get']);
Route::get('/durasi/create',[DurasiController::class,'create']);
Route::post('/durasi/store',[DurasiController::class,'store']);
Route::get('/durasi/{id}/edit',[DurasiController::class,'edit']);
Route::put('/durasi/{id}',[DurasiController::class,'update']);
Route::delete('/durasi/{id}/destroy',[DurasiController::class,'destroy']);

Route::get('/peserta',[PesertaController::class,'get']);
Route::get('/peserta/create',[PesertaController::class,'create']);
Route::post('/peserta/store',[PesertaController::class,'store']);
Route::get('/peserta/{id}/edit',[PesertaController::class,'edit']);
Route::put('/peserta/{id}',[PesertaController::class,'update']);
Route::delete('/peserta/{id}/destroy',[PesertaController::class,'destroy']);
Route::get('/peserta/{id}/detail',[PesertaController::class,'detail']);
Route::get('/peserta/{id}/cetak',[PesertaController::class,'cetak']);
Route::get('/peserta/durasi/{besar}/{kecil}',[PesertaController::class,'getPesertaByDurasi']);

Route::get('/filter-peserta',[FilterController::class,'filterPeserta']);
Route::post('/filter/peserta',[FilterController::class,'hasilFilterPeserta']);

Route::get('/generate-peserta', [ExcelController::class, 'generateExcel']);
Route::get('/generate-fungsi', [ExcelController::class, 'generateFungsi']);
Route::get('/generate-asal', [ExcelController::class, 'generateAsalInstansi']);





// Route::get('/registerIndex', [AuthController::class, 'registerIndex']);
// Route::post('/register', [AuthController::class, 'register']);
