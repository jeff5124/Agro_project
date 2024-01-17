<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\EspeceController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');
    Route::get('/project/index', [ProjectController::class, 'index'])->name('project.index');
    Route::get('/project/show/{id}', [ProjectController::class, 'show'])->name('project.show');
    Route::post('/project/save', [ProjectController::class, 'save'])->name('project.save');

});


Route::get('/domaine/index', [DomaineController::class, 'index'])->name('domaine.index');
Route::post('/domaine/save', [DomaineController::class, 'save'])->name('domaine.save');


Route::get('/espece/index', [EspeceController::class, 'index'])->name('espece.index');
Route::get('/espece/create', [EspeceController::class, 'create'])->name('espece.create');
Route::post('/espece/save', [EspeceController::class, 'save'])->name('espece.save');
Route::get('/espece/show/{id}', [EspeceController::class, 'show'])->name('espece.show');

require __DIR__.'/auth.php';
