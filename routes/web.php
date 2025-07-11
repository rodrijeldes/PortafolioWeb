<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index']);

// Rutas para las páginas de proyectos
Route::prefix('proyectos')->group(function () {
    Route::get('/smartcare', function () {
        return view('proyectos.smartcare');
    })->name('proyecto.smartcare');

    Route::get('/ecotrack', function () {
        return view('proyectos.ecotrack');
    })->name('proyecto.ecotrack');

    Route::get('/fintech', function () {
        return view('proyectos.fintech');
    })->name('proyecto.fintech');

    Route::get('/musicevents', function () {
        return view('proyectos.musicevents');
    })->name('proyecto.musicevents');
});
