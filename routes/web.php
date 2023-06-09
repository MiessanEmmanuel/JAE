<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AproposController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RejoindreController;
use App\Http\Controllers\NosprogrammeController;

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

/* Route::get('/', function () {
    return view('welcome');
});
 */
// Les routes de la page d'accueil
Route::get('/', [AccueilController::class, 'index'])->name('accueil');

// Les routes de la page A Propos
Route::get('/a-Propos', [AproposController::class, 'show'])->name('apropos');

// Les routes de la page Blog
Route::get('/blog', [BlogController::class, 'show'])->name('blog');

// Les routes de la page Forum
Route::get('/forum', [ForumController::class, 'show'])->name('forum');

// Les routes de la page Nos Programmes
Route::get('/programme', [NosprogrammeController::class, 'show'])->name('programme');
Route::post('/programme', [NosprogrammeController::class, 'store'])->name('inscription_programme');

// Les routes de la page Nous Rejoindre
Route::get('/rejoindre', [RejoindreController::class, 'show'])->name('rejoindre');
Route::post('/rejoindre', [RejoindreController::class, 'store'])->name('rejoindre_form');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

