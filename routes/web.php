<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\PengabdianController;
use App\Http\Controllers\PublicationController;
use App\Http\Controllers\ResearchProductController;
use App\Http\Controllers\TeamController;
use Illuminate\Support\Facades\Route;

Route::get('/', [LandingController::class, 'index'])->name('landing');

Route::get('/tes-admin', function () {
    return 'Route Tes OK';
});


// Route::prefix('admin/research-products')->group(function () {
//     Route::get('/', [ResearchProductController::class, 'index'])->name('research-products.index');
//     Route::get('/create', [ResearchProductController::class, 'create'])->name('research-products.create');
//     Route::post('/', [ResearchProductController::class, 'store'])->name('research-products.store');
//     Route::get('/{id}/edit', [ResearchProductController::class, 'edit'])->name('research-products.edit');
//     Route::put('/{id}', [ResearchProductController::class, 'update'])->name('research-products.update');
//     Route::delete('/{id}', [ResearchProductController::class, 'destroy'])->name('research-products.destroy');
// });

// Route::prefix('admin/publications')->group(function () {
//     Route::get('/', [PublicationController::class, 'index'])->name('publications.index');
//     Route::get('/create', [PublicationController::class, 'create'])->name('publications.create');
//     Route::post('/', [PublicationController::class, 'store'])->name('publications.store');
//     Route::get('/{id}/edit', [PublicationController::class, 'edit'])->name('publications.edit');
//     Route::put('/{id}', [PublicationController::class, 'update'])->name('publications.update');
//     Route::delete('/{id}', [PublicationController::class, 'destroy'])->name('publications.destroy');
// });

// Route::prefix('admin/pengabdian')->group(function () {
//     Route::get('/', [PengabdianController::class, 'index'])->name('pengabdian.index');
//     Route::get('/create', [PengabdianController::class, 'create'])->name('pengabdian.create');
//     Route::post('/', [PengabdianController::class, 'store'])->name('pengabdian.store');
//     Route::get('/{id}/edit', [PengabdianController::class, 'edit'])->name('pengabdian.edit');
//     Route::put('/{id}', [PengabdianController::class, 'update'])->name('pengabdian.update');
//     Route::delete('/{id}', [PengabdianController::class, 'destroy'])->name('pengabdian.destroy');
// });

// Route::prefix('admin/team-member')->group(function () {
//     Route::get('/', [TeamController::class, 'index'])->name('team-member.index');
//     Route::get('/create', [TeamController::class, 'create'])->name('team-member.create');
//     Route::post('/', [TeamController::class, 'store'])->name('team-member.store');
//     Route::get('/{id}/edit', [TeamController::class, 'edit'])->name('team-member.edit');
//     Route::put('/{id}', [TeamController::class, 'update'])->name('team-member.update');
//     Route::delete('/{id}', [TeamController::class, 'destroy'])->name('team-member.destroy');
// });