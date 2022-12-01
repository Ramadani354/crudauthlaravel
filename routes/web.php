<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Route::get('/read',[MahasiswaController::class, 'index'])->name('read');
Route::get('/create',[MahasiswaController::class, 'create'])->name('create');
Route::post('/insert',[MahasiswaController::class, 'insert'])->name('insert');
Route::get('/edit/{nim}',[MahasiswaController::class, 'edit'])->name('edit');
Route::post('/update/{nim}',[MahasiswaController::class, 'update'])->name('update');
Route::get('/delete/{nim}',[MahasiswaController::class, 'delete'])->name('delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
