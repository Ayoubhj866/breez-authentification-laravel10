<?php

use App\Http\Controllers\AdminPanel\AdminController;
use App\Http\Controllers\CostumerPanel\CostumerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendorPanel\VendorController;
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

Route::get('/dashboard', [CostumerController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

//admin
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get("admin/dashboard", [AdminController::class, 'index'])->name('admin.dashboard');
});

//vendor
Route::middleware(['auth', 'role:vendor'])->group(function () {
    Route::get("vendor/dashboard", [VendorController::class, 'index'])->name('vendor.dashboard');
});
