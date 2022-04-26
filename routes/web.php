<?php

use App\Http\Controllers\ModalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard-index');

require __DIR__.'/auth.php';



route::get('/', [PagesController::class, 'home'])->name('home-index');
route::get('/sluzby', [PagesController::class, 'services'])->name('services');
route::get('/galerie', [PagesController::class, 'gallery'])->name('gallery');
route::get('/kontakty', [PagesController::class, 'contacts'])->name('contacts');
route::get('/o-mne', [PagesController::class, 'aboutMe'])->name('aboutMe');

route::post('rezervace/store', [ModalController::class, 'store'])->name('rezervace-store');
