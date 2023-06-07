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

Route::get('/', function () {
    return view('welcome');
});

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
Route::get('/', function () {
    return view('homepage-tailwind');
});
Route::get('homepage', function () {
    return view('homepage-tailwind');
});

Route::middleware(['guest'])->group(function () {

  });

//route that need authentication
Route::middleware('auth')->group(function () {
    Route::get('/teslogout', function () {
        return view('teslogout');
    });
    Route::get('tes', function (){
        return view('tes');
    });
    Route::get('kehilangan', function (){
        return view('teslogout');
    });

    /*
   //buat upload file
    Route::get('upload', function () {
        return view('upload');
    });
    Route::post('upload',[UploadController::class,'upload'])->name('upload');*/
    Route::post('/kehilangan',[KehilanganController::class,'store']);
});

Route::get('/tentang', function () {
    return view('tentangproduk');
});

Route::get('/kehilangansuccess', function () {
    return view('kehilangan-success');
});

Route::get('/detaillaporan', function () {
    return view('detail-laporan');
});

//Index Data
//Route::get(\App\Http\Controllers\KehilanganController::class);
//Route::get('kehilangan', 'KehilanganController@index')->name('kehilangan');
Route::get('homepage-tailwind', 'KehilanganController@index');



