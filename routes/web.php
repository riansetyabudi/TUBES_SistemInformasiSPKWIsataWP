<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlternatifWisataController;
use App\Http\Controllers\BobotKriteriaController;
use App\Http\Controllers\NilaiKriteriaController;
use App\Http\Controllers\HasilKeputusanController;
use App\Http\Controllers\NormalisasiController;
use App\Http\Controllers\PenilaianPreferensiController;
use App\Http\Controllers\PerangkinganController;
use App\Http\Controllers\UsersController;
use App\Models\AlternatifWisata;
use App\Models\PenilaianPreferensi;

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

Route::get('/alternatif', [AlternatifWisataController::class, 'index'])->name('alternatif.index');
Route::get('/alternatif/create', [AlternatifWisataController::class, 'addView'])->name('alternatif.create');
Route::post('/alternatif', [AlternatifWisataController::class, 'store']);
Route::get('/alternatif/edit/{id}', [AlternatifWisataController::class, 'edit'])->name('alternatif.edit');
Route::put('/alternatif/update/{id}', [AlternatifWisataController::class, 'update'])->name('alternatif.update');
Route::delete('/alternatif/delete/{id}', [AlternatifWisataController::class, 'destroy'])->name('alternatif.destroy');

Route::get('/bobot', [BobotKriteriaController::class, 'index'])->name('bobot.index');
Route::get('/bobot/create', [BobotKriteriaController::class, 'addView'])->name('bobot.create');
Route::post('/bobot', [BobotKriteriaController::class, 'store']);
Route::get('/bobot/edit/{id}', [BobotKriteriaController::class, 'edit'])->name('bobot.edit');
Route::put('/bobot/update/{id}', [BobotKriteriaController::class, 'update'])->name('bobot.update');
Route::delete('/bobot/delete/{id}', [BobotKriteriaController::class, 'destroy'])->name('bobot.destroy');

Route::get('/hasil', [HasilKeputusanController::class, 'index'])->name('hasil.index');
Route::get('/hasil/create', [HasilKeputusanController::class, 'addView'])->name('hasil.create');
Route::post('/hasil', [HasilKeputusanController::class, 'store']);
Route::get('/hasil/edit/{id}', [HasilKeputusanController::class, 'edit'])->name('hasil.edit');
Route::put('/hasil/update/{id}', [HasilKeputusanController::class, 'update'])->name('hasil.update');
Route::delete('/hasil/delete/{id}', [HasilKeputusanController::class, 'destroy'])->name('hasil.destroy');

Route::get('/nilai_kriteria', [NilaiKriteriaController::class, 'index'])->name('nilai_kriteria.index');
Route::get('/nilai_kriteria/create', [NilaiKriteriaController::class, 'addView'])->name('nilai_kriteria.create');
Route::post('/nilai_kriteria', [NilaiKriteriaController::class, 'store']);
Route::get('/nilai_kriteria/edit/{id}', [NilaiKriteriaController::class, 'edit'])->name('nilai_kriteria.edit');
Route::put('/nilai_kriteria/update/{id}', [NilaiKriteriaController::class, 'update'])->name('nilai_kriteria.update');
Route::delete('/nilai_kriteria/delete/{id}', [NilaiKriteriaController::class, 'destroy'])->name('nilai_kriteria.destroy');

Route::get('/normalisasi', [NormalisasiController::class, 'index'])->name('normalisasi.index');
Route::get('/normalisasi/create', [NormalisasiController::class, 'addView'])->name('normalisasi.create');
Route::post('/normalisasi', [NormalisasiController::class, 'store']);
Route::get('/normalisasi/edit/{id}', [NormalisasiController::class, 'edit'])->name('normalisasi.edit');
Route::put('/normalisasi/update/{id}', [NormalisasiController::class, 'update'])->name('normalisasi.update');
Route::delete('/normalisasi/delete/{id}', [NormalisasiController::class, 'destroy'])->name('normalisasi.destroy');

Route::get('/penilaian_preferensi', [PenilaianPreferensiController::class, 'index'])->name('penilaian_preferensi.index');
Route::get('/penilaian_preferensi/create', [PenilaianPreferensiController::class, 'addView'])->name('penilaian_preferensi.create');
Route::post('/penilaian_preferensi', [PenilaianPreferensiController::class, 'store']);
Route::get('/penilaian_preferensi/edit/{id}', [PenilaianPreferensiController::class, 'edit'])->name('penilaian_preferensi.edit');
Route::put('/penilaian_preferensi/update/{id}', [PenilaianPreferensiController::class, 'update'])->name('penilaian_preferensi.update');
Route::delete('/penilaian_preferensi/delete/{id}', [PenilaianPreferensiController::class, 'destroy'])->name('penilaian_preferensi.destroy');

Route::get('/perangkingan', [PerangkinganController::class, 'index'])->name('perangkingan.index');
Route::get('/perangkingan/create', [PerangkinganController::class, 'addView'])->name('perangkingan.create');
Route::post('/perangkingan', [PerangkinganController::class, 'store']);
Route::get('/perangkingan/edit/{id}', [PerangkinganController::class, 'edit'])->name('perangkingan.edit');
Route::put('/perangkingan/update/{id}', [PerangkinganController::class, 'update'])->name('perangkingan.update');
Route::delete('/perangkingan/delete/{id}', [PerangkinganController::class, 'destroy'])->name('perangkingan.destroy');

Route::get('/users', [UsersController::class, 'index'])->name('users.index');
Route::get('/users/create', [UsersController::class, 'addView'])->name('users.create');
Route::post('/users', [UsersController::class, 'store']);
Route::get('/users/edit/{id}', [UsersController::class, 'edit'])->name('users.edit');
Route::post('/users/update/{id}', [UsersController::class, 'update'])->name('users.update');
Route::delete('/users/delete/{id}', [UsersController::class, 'destroy'])->name('users.destroy');