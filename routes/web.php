<?php

use App\Http\Controllers\JabatanController;
use App\Http\Controllers\PelamarController;
use App\Http\Controllers\ProfileController;
use App\Models\Pelamar;
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

// Route::get('/form', function(){
//     return view('form.index');
// });

// Route::get('/jabatan', function(){
//     return view('jabatan.index');
// });

// Route::get('/pelamar', function(){
//     return view('pelamar.index');
// });

#Pelamar
Route::get('/pelamar',[PelamarController::class,'index'])->name('pelamar');

#Jabatan
Route::get('/jabatan',[JabatanController::class,'index'])->name('jabatan');
Route::get('/jabatan/create',[JabatanController::class,'create'])->name('jabatan/create');
Route::post('/jabatan/insert',[JabatanController::class,'store'])->name('/jabatan/insert');
Route::get('/jabatan/show/{jabatan}',[JabatanController::class,'show'])->name('/jabatan/show');
Route::post('/jabatan/edit{jabatan}',[JabatanController::class,'edit'])->name('/jabatan/edit');
Route::get('/jabatan/delete{jabatan}',[JabatanController::class,'destroy'])->name('/jabatan/delete');


Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
