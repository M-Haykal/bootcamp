<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;

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
    return redirect('/login');
});

Route::get('/login', [LibraryController::class, 'login'])->name('login');
Route::get('/register', [LibraryController::class, 'register'])->name('register');
Route::get('/profil', [LibraryController::class, 'profil'])->name('profil');

// Login Action
Route::post('/login', [AuthController::class, 'login'])->name('login_user');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout_user');
Route::post('/register', [AuthController::class, 'register'])->name('register_user');

Route::prefix('admin')->middleware('auth')->group(function (){
    Route::get('/dashboard', [LibraryController::class, 'index_admin'])->name('dashboard_admin');
    Route::delete('/buku/{id}', [LibraryController::class, 'delete_buku'])->name('buku.delete');
    Route::post('/buku', [LibraryController::class, 'create_buku'])->name('buku.create');
    Route::put('/buku/{id}', [LibraryController::class, 'edit_buku'])->name('buku.edit');
    Route::get('/buku', [LibraryController::class, 'buku'])->name('buku');
    
    Route::post('/siswa', [LibraryController::class, 'create_siswa'])->name('siswa.create');
    Route::put('/siswa/{id}', [LibraryController::class, 'edit_siswa'])->name('siswa.edit');
    Route::delete('/siswa/{id}', [LibraryController::class, 'delete_siswa'])->name('siswa.delete');
});

Route::prefix('siswa')->middleware('auth:siswa')->group(function (){
    Route::get('/dashboard', [LibraryController::class, 'index_siswa'])->name('dashboard_siswa');
});