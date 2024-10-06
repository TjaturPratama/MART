<?php

use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\KepalaKeluargaController;
use App\Http\Controllers\PendudukController;
use App\Models\KepalaKeluarga;
use App\Models\Penduduk;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BiodataController;


// Rute publik
Route::get('/', function () {
    return view('Login');
});

Route::get('/login', function () {
    return view('Login');
})->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'authenticate']);

// Rute yang membutuhkan autentikasi
Route::middleware(['auth'])->group(function () {
    Route::post('/tambah-biodata', [PendudukController::class, 'store']);
    Route::post('/editbiodata/edit/id={id}', [PendudukController::class, 'update']);
    Route::post('/hapusbiodata/id={id}', [PendudukController::class, 'destroy']);

    Route::post('/editkk/edit/id/{id}', [KepalaKeluargaController::class, 'update']);
    Route::post('/editkk/delete/id/{id}', [KepalaKeluargaController::class, 'destroy']);

    Route::get('/home', function () {
        return view('home', [
            'nama' => 'Asep Kastaman',
            'jmlhPenduduk' => Penduduk::count(),
            'jmlhKeluarga' => KepalaKeluarga::count(),
        ]);
    });

    Route::get('/biodata', function () {
        return view('biodata');
    });

    Route::get('/KK', function () {
        return view('KK', [
            'dataKK' => KepalaKeluarga::all(),
        ]);
    });

    Route::get('/KK/search/name', [PendudukController::class, 'searchKK']);
    Route::get('/ktp/search/nik', [PendudukController::class, 'searchKtp']);
    Route::get('/biodata/search/name', [PendudukController::class, 'searchBiodata']);

    Route::get('/KTP', function () {
        return view('KTP', ['dataKtp' => Penduduk::select(['nik', 'nama', 'id'])->get()]);
    });

    Route::get('/datadiri/id={id}', function ($id) {
        return view('datadiri', ['dataBiodata' => Penduduk::findOrFail($id)]);
    });

    Route::get('/editbiodata/edit/id={id}', function ($id) {
        return view('editbiodata', ['dataBiodata' => Penduduk::findOrFail($id)]);
    });

    Route::get('/hapusbiodata', function () {
        return view('hapusbiodata');
    });

    Route::get('/tambahbiodata', function () {
        return view('tambahbiodata');
    });

    Route::get('/tampilankk/id/{id}', function ($id) {
        return view('tampilankk', ['kk' => KepalaKeluarga::findOrFail($id)]);
    });

    Route::get('/tambahkk', function () {
        return view('tambahkk');
    });

    Route::post('/tambahkk', [KepalaKeluargaController::class, 'store']);

    Route::get('/tampilan/editkk/id={id}', function ($id) {
        return view('editkk', ['dataKK' => KepalaKeluarga::findOrFail($id)]);
    });

    Route::get('/liatktp/id={id}', function ($id) {
        return view('liatktp', ['ktp' => Penduduk::findOrFail($id)]);
    });


    Route::get('/biodata', [BiodataController::class, 'index']);
    // Route::get('/biodata/search', [BiodataController::class, 'search'])->name('biodata.search');
});

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
