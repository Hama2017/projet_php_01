<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApprenantController;



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

Route::get('/', [ApprenantController::class, 'index']);

// Route pour afficher la liste des apprenants
Route::get('/apprenants', [ApprenantController::class, 'index'])->name('list-students');

// Route pour afficher le formulaire de création d'un apprenant
Route::get('/apprenants/create', [ApprenantController::class, 'create'])->name('add-new-student');

// Route pour traiter la création d'un apprenant
Route::post('/apprenants', [ApprenantController::class, 'store']);

// Route pour afficher les détails d'un apprenant
Route::get('/apprenants/{apprenant}', [ApprenantController::class, 'show']);

// Route pour afficher le formulaire de modification d'un apprenant
Route::get('/apprenants/{apprenant}/edit', [ApprenantController::class, 'edit']);

// Route pour traiter la modification d'un apprenant
Route::put('/apprenants/{apprenant}', [ApprenantController::class, 'update']);

// Route pour supprimer un apprenant
Route::delete('/apprenants/{apprenant}', [ApprenantController::class, 'destroy']);