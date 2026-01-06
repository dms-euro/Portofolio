<?php

use App\Http\Controllers\admin\CeritaController as CeritaControllerAdmin;
use App\Http\Controllers\admin\KontakContreoller as KontakContreollerAdmin;
use App\Http\Controllers\admin\PortofolioController as PortofolioControllerAdmin;
use App\Http\Controllers\admin\ProfilController as  ProfilControllerAdmin;
use App\Http\Controllers\admin\SertifikatController as SertifikatControllerAdmin;
use App\Http\Controllers\admin\ServiceController as ServiceControllerAdmin;
use App\Http\Controllers\ProfilController;
use Illuminate\Support\Facades\Route;

Route::get('/beranda', function () {
    return view('admin.beranda');
});

Route::get('/profil/admin', [ProfilController::class, 'index'])->name('profil.index');
Route::get('/', [SertifikatControllerAdmin::class, 'index'])->name('admin.sertifikat.index');
Route::post('/sertifikat/post', [SertifikatControllerAdmin::class, 'store'])->name('admin.sertifikat.store');
Route::get('/profil', [ProfilControllerAdmin::class, 'index'])->name('admin.profil.index');
Route::put('/profil/{profil}/update', [ProfilControllerAdmin::class, 'update'])->name('admin.profil.update');
Route::post('cerita/post', [CeritaControllerAdmin::class, 'store'])->name('admin.cerita.store');
Route::delete('cerita/{cerita}/delete', [CeritaControllerAdmin::class, 'destroy'])->name('admin.cerita.destroy');
Route::post('portofolio/post', [PortofolioControllerAdmin::class, 'store'])->name('admin.portofolio.store');
Route::delete('portofolio/{portofolio}/delete', [PortofolioControllerAdmin::class, 'destroy'])->name('admin.portofolio.destroy');
Route::get('/service', [ServiceControllerAdmin::class, 'index'])->name('admin.service.index');
Route::get('/kontak', [KontakContreollerAdmin::class, 'index'])->name('admin.kontak.index');
