<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\KeuanganController;
use App\Http\Controllers\ManajemenDataController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PengaturanController;
use App\Http\Controllers\KonfirmasiController;


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
    return view('welcome');
});


//Login admin
Route::get('/dashboard', function () {
    return view('dashboard'); // Pastikan file Blade Template-nya ada di resources/views/dashboard.blade.php
});

Route::get('/loginAdmin', function () {
    return view('auth.loginAdmin'); // Buat file loginAdmin.blade.php
});

Route::get('/cekPembayaran', function () {
    return view('auth.cekPembayaran'); // Buat file cekPembayaran.blade.php
});

Route::get('/loginSiswa', function () {
    return view('auth.loginSiswa'); // Buat file loginSiswa.blade.php
});

Route::get('/konfirmasipembayaran', function () {
    return view(('konfirmasipembayaran.index'));
});


Route::get('/loginAdmin', [AuthController::class, 'showLoginFormAdmin'])->name('login');
Route::post('/loginAdmin', [AuthController::class, 'loginAdmin']);
Route::get('/loginAdmin/dashboard', [AuthController::class, 'dashboardAdmin'])->middleware('auth')->name('dashboard');
Route::get('/loginAdmin/pembayaran', [PembayaranController::class, 'index'])->name('pembayaran');
Route::get('/loginAdmin/keuangan', [KeuanganController::class, 'index'])->name('keuangan');
Route::get('/loginAdmin/manajemen-data', [ManajemenDataController::class, 'index'])->name('manajemen-data');
Route::get('/loginAdmin/laporan', [LaporanController::class, 'index'])->name('laporan');
Route::get('/loginAdmin/pengaturan', [PengaturanController::class, 'index'])->name('pengaturan');
Route::get('/forgot-password-admin', [AuthController::class, 'showForgotFormAdmin'])->name('forgotPasswordAdminForm');
Route::post('/forgot-password-admin', [AuthController::class, 'forgotPasswordAdmin'])->name('forgotPasswordAdmin');


//Login siswa 
Route::get('/loginSiswa', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'processLogin']);

Route::get('/konfirmasi-pembayaran', function () {
    return view('konfirmasi');
})->name('konfirmasi.form');

Route::post('/konfirmasi-pembayaran', [PembayaranController::class, 'store'])->name('konfirmasi.store');

// Route::get('/loginSiswa/konfirmasi', [AuthController::class, 'konfirmasi'])->middleware('auth')->name('dashboard');
Route::get('/forgot-password-siswa', [AuthController::class, 'showForgotFormSiswa'])->name('forgotPassworSiswaForm');
Route::post('/forgot-password-siswa', [AuthController::class, 'forgotPasswordAdmin'])->name('forgotPasswordSiswa');