<?php

use App\Http\Controllers\Dosen\DosenController;
use App\Http\Controllers\Dosen\ProfilController;
use App\Http\Controllers\Dosen\UsulanbaruController;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->middleware('dosen')->group(function () {
    Route::get('/dosen', fn () =>  redirect('/dosen/dashboard'));
    Route::get('dosen/dashboard', [DosenController::class, 'index']);
    Route::resource('dosen/usulanbaru', UsulanbaruController::class);


    Route::get('dosen/profil', [ProfilController::class, 'index']);
Route::get('profile/{pegawai}/edit', [ProfilController::class, 'edit']);
Route::put('profile/{pegawai}', [ProfilController::class, 'updateProfil']);

Route::get('dosen/lanjutan', [UsulanbaruController::class, 'lanjutan']);
});


