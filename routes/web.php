<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
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

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:clear');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('config:cache');

    return '<h2 style="color: red;">Cache, View, Config, Route cleared!</h2>';
});

Route::get('/', [DashboardController::class, 'welcomePage'])->name('welcomePage');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/messages', [DashboardController::class, 'messagesIndex'])->middleware(['auth', 'verified'])->name('messages');
Route::get('/wings', [DashboardController::class, 'wingsIndex'])->middleware(['auth', 'verified'])->name('wings');
Route::get('/wings/add-new', [DashboardController::class, 'wingsAddNew'])->middleware(['auth', 'verified'])->name('wingsAddNew');
Route::post('/wings/add-new', [DashboardController::class, 'wingsAddNewPost'])->middleware(['auth', 'verified'])->name('wingsAddNewPost');
Route::get('/wings/edit/{id}', [DashboardController::class, 'wingsEditIndex'])->middleware(['auth', 'verified'])->name('wingsEditIndex');
Route::post('/wings/edit/{id}', [DashboardController::class, 'wingsEditPost'])->middleware(['auth', 'verified'])->name('wingsEditPost');
Route::get('/wings/delete/{id}', [DashboardController::class, 'wingsDelete'])->middleware(['auth', 'verified'])->name('wingsDelete');
Route::get('/clients', [DashboardController::class, 'clientsIndex'])->middleware(['auth', 'verified'])->name('clients');

Route::post('/contactStore', [DashboardController::class, 'contactStore'])->name('contactStore');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
