<?php

use App\Models\Employee;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EmployeeController;
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

Route::get('/', function () {

    $jumlahpegawai = Employee::count();
    $jumlahpegawailaki = Employee::where('jeniskelamin','laki laki')->count();
    $jumlahpegawaiperempuan = Employee::where('jeniskelamin','perempuan')->count();

    return view('welcome',compact('jumlahpegawai','jumlahpegawailaki','jumlahpegawaiperempuan'));
})->middleware('auth');

Route::get('/pegawai', [EmployeeController::class, 'index']) ->name('pegawai')->middleware('auth');
Route::get('/tambahpegawai', [EmployeeController::class, 'tambahpegawai']) ->name('tambahpegawai');
Route::post('/insertpegawai', [EmployeeController::class, 'insertpegawai']) ->name('insertpegawai');

Route::get('/tampilkandata/{id} ', [EmployeeController::class,'tampilkandata']) ->name('tampilkandata');
Route::post('/updatedata/{id} ', [EmployeeController::class,'updatedata']) ->name('updatedata');

Route::get('/deletedata/{id} ', [EmployeeController::class,'deletedata']) ->name('deletedata');

//export PDF
Route::get('/exportpdf ', [EmployeeController::class,'exportpdf']) ->name('exportpdf');

Route::get('/login ', [LoginController::class,'login']) ->name('login');
Route::post('/loginproses ', [LoginController::class,'loginproses']) ->name('loginproses');

Route::get('/register ', [LoginController::class,'register']) ->name('register');
Route::post('/registeruser ', [LoginController::class,'registeruser']) ->name('registeruser');

Route::get('/logout ', [LoginController::class,'logout']) ->name('logout');
