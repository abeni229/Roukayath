<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VitrineController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ContactController;

// Page d'accueil du site vitrine (publique)
Route::get('/', [VitrineController::class, 'accueil'])->name('accueil');

// Pages supplémentaires du site vitrine (publiques)
Route::get('/contact', [VitrineController::class, 'contact'])->name('contact');
Route::get('/a-propos', [VitrineController::class, 'aPropos'])->name('a-propos');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/statistiques', [DashboardController::class, 'statistiques'])->name('statistiques');
    Route::get('/parametres', [DashboardController::class, 'parametres'])->name('parametres');
    Route::get('/profil/modifier', [DashboardController::class, 'modifierProfil'])->name('profil.modifier');
});


// Traitement du formulaire de contact (POST)
Route::post('/contact', [ContactController::class, 'store'])->name('contact.send');
