<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DomaineController;
use App\Http\Controllers\EspeceController;
use App\Http\Controllers\UserController;
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
    Route::get('/project/update', [ProjectController::class, 'update'])->name('project.update');
    Route::post('/project/edit', [ProjectController::class, 'edit'])->name('project.edit');


    Route::get('/user/index', [UserController::class, 'index'])->name('user.index');
    Route::post('/user/save', [UserController::class, 'save'])->name('user.save');
    Route::get('/user/index2', [UserController::class, 'index2'])->name('user.index2');

});


Route::get('/domaine/index', [DomaineController::class, 'index'])->name('domaine.index');
Route::post('/domaine/save', [DomaineController::class, 'save'])->name('domaine.save');


Route::get('/espece/index', [EspeceController::class, 'index'])->name('espece.index');
Route::get('/espece/create', [EspeceController::class, 'create'])->name('espece.create');
Route::post('/espece/save', [EspeceController::class, 'save'])->name('espece.save');
Route::get('/espece/show/{id}', [EspeceController::class, 'show'])->name('espece.show');

require __DIR__.'/auth.php';
