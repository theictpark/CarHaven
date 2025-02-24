<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Frontend\PageController;
use App\Http\Controllers\Frontend\RentalController;
use App\Http\Controllers\Frontend\CarController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/dashboard', function () {
   return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware(['auth', 'role:customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
});



Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/car/{id}', [PageController::class, 'show'])->name('car.show');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::middleware('auth')->group(function () {
    Route::get('/rentals/{car_id}/book', [RentalController::class, 'create'])->name('rentals.create');
    Route::post('/rentals/store', [RentalController::class, 'store'])->name('rentals.store');
    Route::get('/my-rentals', [RentalController::class, 'history'])->name('rentals.history');
    Route::delete('/rentals/{id}/cancel', [RentalController::class, 'cancel'])->name('rentals.cancel');
});



Route::get('/rentals', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/{id}', [CarController::class, 'show'])->name('cars.show');



