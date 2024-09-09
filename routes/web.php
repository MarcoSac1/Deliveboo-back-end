<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\HomeController as GuestHomeController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\DishController;



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

Route::get('/restourant', [AdminHomeController::class,'index'])->name('pages.index');
Route::get('/show', [AdminHomeController::class,'show'])->name('pages.show');

Route::get('/create', [AdminHomeController::class,'create'])->name('pages.create');
Route::post('/restourant', [AdminHomeController::class, 'store'])->name('pages.store');

Route::middleware('auth')->name('admin.')->prefix('admin/')->group(function(){
        //Rotte protette
    // Route::get('secret-home', [AdminHomeController::class, 'index'])->name('home');

    Route::resource('orders', OrderController::class);

    // Route::resource('/show',AdminHomeController::class);

Route::resource('orders', OrderController::class);
    }
);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



