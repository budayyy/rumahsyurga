<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\ArtikelJenisController;
use App\Http\Controllers\ArtikelDaftarController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PenggunaDaftarController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainingDaftarController;
use App\Http\Controllers\TrainingKategoriController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\WeddingDaftarController;
use App\Http\Controllers\WeddingJenisController;

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

// Halaman Awal
Route::get('/', [LoginController::class, 'index']);
Route::get('/forgot-password', [LoginController::class, 'forgot']);


// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index']);

// Pengguna
Route::get('/pengguna', [PenggunaController::class, 'index']);
Route::resource('/pengguna/daftar', PenggunaDaftarController::class);
Route::get('/pengguna/ditangguhkan', [PenggunaController::class, 'ditangguhkan']);
Route::get('/pengguna/dihapus', [PenggunaController::class, 'dihapus']);
Route::post('/pengguna/daftar/ubahStatus/{user_id}', [PenggunaDaftarController::class, 'ubahStatus']);

// Admin
Route::resource('/admin', AdminController::class);
Route::get('/admin-daftar', [AdminController::class, 'daftar']);
Route::get('/admin-ditangguhkan', [AdminController::class, 'ditangguhkan']);
Route::get('/admin-dihapus', [AdminController::class, 'dihapus']);
Route::post('/admin/ubahStatus/{admin_id}', [AdminController::class, 'ubahStatus']);

// Konsultasi
Route::resource('/konsultasi-chat', KonsultasiController::class);
Route::get('/konsultasi-transaksi', [KonsultasiController::class, 'transaksi']);
Route::get('/konsultasi-detail/{konsul_id}', [KonsultasiController::class, 'konsultasi_detail']);
Route::get('/konsultasi-pertemuan', [KonsultasiController::class, 'pertemuan']);
Route::get('/pertemuan-detail', [KonsultasiController::class, 'pertemuan_detail']);

// Artikel
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/artikel/transaksi', [ArtikelController::class, 'transaksi']);
Route::get('/artikel/transaksi/detail', [ArtikelController::class, 'detail']);
Route::get('/artikel/transaksi/invoice', [ArtikelController::class, 'invoice']);
// Jenis Artikel
Route::resource('/artikel/jenis', ArtikelJenisController::class);
Route::get('/artikel/jenis-terhapus', [ArtikelJenisController::class, 'terhapus']);
// Daftar Artikel
Route::resource('/artikel/daftar', ArtikelDaftarController::class);
Route::get('/artikel/daftar-terhapus', [ArtikelDaftarController::class, 'terhapus']);


// Wedding Organizer
Route::get('/wedding', [WeddingController::class, 'index']);
Route::get('/wedding/transaksi', [WeddingController::class, 'transaksi']);
Route::get('/wedding/transaksi/detail', [WeddingController::class, 'detail']);
Route::get('/wedding/transaksi/invoice', [WeddingController::class, 'invoice']);
// jenis Wedding Organizer
Route::resource('/wedding/jenis', WeddingJenisController::class);
Route::get('/wedding/jenis-terhapus', [WeddingJenisController::class, 'terhapus']);
// Daftar Wedding Organizer
Route::resource('/wedding/daftar', WeddingDaftarController::class);
Route::get('/wedding/daftar-terhapus', [WeddingDaftarController::class, 'terhapus']);

// Training
Route::get('/training', [TrainingController::class, 'index']);
Route::get('/training/transaksi', [TrainingController::class, 'transaksi']);
Route::get('/training/transaksi/detail', [TrainingController::class, 'detail']);
Route::get('/training/transaksi/invoice', [TrainingController::class, 'invoice']);
// kategori Training
Route::resource('/training/kategori', TrainingKategoriController::class);
Route::get('/training/kategori-terhapus', [TrainingKategoriController::class, 'terhapus']);
// Daftar Training
Route::resource('/training/daftar', TrainingDaftarController::class);
Route::get('/training/daftar-terhapus', [TrainingDaftarController::class, 'terhapus']);

// Pembayaran
Route::resource('/pembayaran', PembayaranController::class);

// Laporan
Route::get('/laporan', [LaporanController::class, 'index']);
Route::get('/laporan/artikel', [LaporanController::class, 'artikel']);
Route::get('/laporan/wedding', [LaporanController::class, 'wedding']);
Route::get('/laporan/training', [LaporanController::class, 'training']);


// Profile
Route::get('/profile', [ProfileController::class, 'index']);

// Kota
Route::resource('/kota', KotaController::class);

// Pendidikan
Route::resource('/pendidikan', PendidikanController::class);

// Faq & Tips
Route::resource('/faq&tips', FaqController::class);
