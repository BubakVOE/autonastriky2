<?php

use Illuminate\Support\Facades\Route;


// admin
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\PostController;
use App\Http\Controllers\admin\ReserveController;

// user
use App\Http\Controllers\user\PagesController;
use App\Http\Controllers\user\ReservatorController;
use App\Http\Controllers\user\PosterController;


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



// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard-index');

require __DIR__.'/auth.php';





// Admin - Dashboard
Route::group(['middleware' => ['auth', 'admin']], function () {

});


route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');

route::put('/dashboard/reserve/update/{id}', [ReserveController::class, 'update']);
route::delete('/dashboard/reserve/delete/{id}', [ReserveController::class, 'delete'])->name('dashboard-delete');

route::get('/dashboard/post/create', [PostController::class, 'create'])->name('galerie.create');
route::post('/dashboard/post/store', [PostController::class, 'store'])->name('galerie.store');
route::get('/dashboard/post/edit/{id}', [PostController::class, 'edit']);
route::put('/dashboard/post/update/{id}', [PostController::class, 'update']);
Route::delete('/dashboard/post/delete/{id}',[PostController::class,'destroy']);
Route::delete('/dashboard/post/deleteimage/{id}',[PostController::class,'deleteimage']);
Route::delete('/dashboard/post/deleteThumbnail/{id}',[PostController::class,'deletecover']);


// public
route::get('/', [PagesController::class, 'home'])->name('home-index');
route::get('/sluzby', [PagesController::class, 'services'])->name('services');
route::get('/galerie', [PagesController::class, 'gallery'])->name('gallery');
route::get('/kontakty', [PagesController::class, 'contacts'])->name('contacts');
route::get('/o-mne', [PagesController::class, 'aboutMe'])->name('aboutMe');

route::post('rezervace/store', [ReservatorController::class, 'store'])->name('rezervace-store');
