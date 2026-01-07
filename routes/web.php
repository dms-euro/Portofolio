<?php

use App\Http\Controllers\admin\CeritaController as CeritaControllerAdmin;
use App\Http\Controllers\admin\KontakContreoller as KontakContreollerAdmin;
use App\Http\Controllers\admin\PortofolioController as PortofolioControllerAdmin;
use App\Http\Controllers\admin\ProfilController as  ProfilControllerAdmin;
use App\Http\Controllers\admin\SertifikatController as SertifikatControllerAdmin;
use App\Http\Controllers\admin\ServiceController as ServiceControllerAdmin;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// public routes
Route::get('/', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/saya', [SertifikatController::class, 'index'])->name('sertifikat.index');
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
Route::get('/kontak', [KontakController::class, 'index'])->name('kontak.index');

// admin routes
Route::get('/profil/admin', [ProfilControllerAdmin::class, 'index'])->name('admin.profil.index');
Route::put('/profil/admin/{profil}/update', [ProfilControllerAdmin::class, 'update'])->name('admin.profil.update');
Route::post('cerita/admin/post', [CeritaControllerAdmin::class, 'store'])->name('admin.cerita.store');
Route::delete('cerita/admin/{cerita}/delete', [CeritaControllerAdmin::class, 'destroy'])->name('admin.cerita.destroy');
Route::post('portofolio/admin/post', [PortofolioControllerAdmin::class, 'store'])->name('admin.portofolio.store');
Route::delete('portofolio/admin/{portofolio}/delete', [PortofolioControllerAdmin::class, 'destroy'])->name('admin.portofolio.destroy');
Route::get('/sertifikat/admin', [SertifikatControllerAdmin::class, 'index'])->name('admin.sertifikat.index');
Route::post('/sertifikat/admin/post', [SertifikatControllerAdmin::class, 'store'])->name('admin.sertifikat.store');
Route::get('/service/admin', [ServiceControllerAdmin::class, 'index'])->name('admin.service.index');
Route::get('/kontak/admin', [KontakContreollerAdmin::class, 'index'])->name('admin.kontak.index');

// email
Route::post('/kirim-pesan', [KontakController::class, 'store'])->name('kirim.pesan');

