<?php
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\HomeController as GuestHomeController;

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

Auth::routes();

Route::get('/home', [GuestHomeController::class, 'index'])->name('home');

Route::get('/show', [AdminHomeController::class,'show'])->name('pages.show');
Route::get('/restourant', [AdminHomeController::class,'index'])->name('pages.index');

Route::middleware('auth')->name('admin.')->prefix('admin/')->group(function(){
        //Rotte protette
    // Route::get('secret-home', [AdminHomeController::class, 'index'])->name('home');
    // Route::resource('/show',AdminHomeController::class);

    }
);

// Route::get('/home', [GuestHomeController::class, 'index'])->name('home');
// Route::middleware('auth')->name('admin.')->prefix('admin')->group (function(){
//         Route::resource('projects', ProjectController::class);
//     }
// );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
