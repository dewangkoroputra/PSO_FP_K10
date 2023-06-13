<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\KehilanganController;
use App\Models\kehilangan;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\TelfonController;
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

//biar bisa akses laravel breeze

Route::get('/', [KehilanganController::class, 'index'])->name('post.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::post('/savepanggilan',[TelfonController::class,'store']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/layout', function () {
    return view('layout');
});

Route::get('/laporkehilangan', function () {
    return view('formlaporan');
});

require __DIR__.'/auth.php';

//route tidak perlu autentifikasi


Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('homepage-tailwind');
    });
    Route::get('homepage', function () {
        return view('homepage-tailwind');
    });
    Route::get('/', [KehilanganController::class, 'index'])->name('post.index');
  });

//route that need authentication
Route::middleware('auth')->group(function () {
    Route::get('/', [KehilanganController::class, 'index'])->name('post.index');
    Route::get('tes', function (){
        return view('tes');
    });
    Route::get('kehilangan', function (){
        return view('teslogout');
    });
    Route::get('/profil', function () {
        return view('profil');
    });

    Route::post('/kehilangan',[KehilanganController::class,'store']);
});

Route::get('/tentang', function () {
    return view('tentangproduk');
});

Route::get('/kehilangan/{id}', [KehilanganController::class, 'show'])->name('show');

Route::get('/kehilangansuccess', function () {
    return view('kehilangan-success');
});

Route::get('/detaillaporan', function () {
    return view('detail-laporan');
});

//
Route::get('kehilangan/destroy/{id}', [KehilanganController::class,'destroy']);


Route::get('/post/sortByJenis/{jenis}', [KehilanganController::class, 'sortByJenis'])->name('post.sortByJenis');

