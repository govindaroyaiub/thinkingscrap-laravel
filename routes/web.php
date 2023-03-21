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

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware(['auth', 'verified'])->name('dashboard');
Route::post('/dashboard/{id}', [DashboardController::class, 'dashboardPost'])->middleware(['auth', 'verified'])->name('dashboardPost');

Route::get('/messages', [DashboardController::class, 'messagesIndex'])->middleware(['auth', 'verified'])->name('messages');

Route::get('/wings', [DashboardController::class, 'wingsIndex'])->middleware(['auth', 'verified'])->name('wings');
Route::get('/wings/add-new', [DashboardController::class, 'wingsAddNew'])->middleware(['auth', 'verified'])->name('wingsAddNew');
Route::post('/wings/add-new', [DashboardController::class, 'wingsAddNewPost'])->middleware(['auth', 'verified'])->name('wingsAddNewPost');
Route::get('/wings/edit/{id}', [DashboardController::class, 'wingsEditIndex'])->middleware(['auth', 'verified'])->name('wingsEditIndex');
Route::post('/wings/edit/{id}', [DashboardController::class, 'wingsEditPost'])->middleware(['auth', 'verified'])->name('wingsEditPost');
Route::get('/wings/delete/{id}', [DashboardController::class, 'wingsDelete'])->middleware(['auth', 'verified'])->name('wingsDelete');

Route::get('/works', [DashboardController::class, 'worksIndex'])->middleware(['auth', 'verified'])->name('works');
Route::get('/works/add-new', [DashboardController::class, 'worksAddNew'])->middleware(['auth', 'verified'])->name('worksAddNew');
Route::post('/works/add-new', [DashboardController::class, 'worksAddNewPost'])->middleware(['auth', 'verified'])->name('worksAddNewPost');


Route::get('/clients', [DashboardController::class, 'clientsIndex'])->middleware(['auth', 'verified'])->name('clients');
Route::get('/clients/add-new', [DashboardController::class, 'clientsAddNew'])->middleware(['auth', 'verified'])->name('clientsAddNew');
Route::post('/clients/add-new', [DashboardController::class, 'clientsAddNewPost'])->middleware(['auth', 'verified'])->name('clientsAddNewPost');
Route::get('/clients/edit/{id}', [DashboardController::class, 'clientsEditIndex'])->middleware(['auth', 'verified'])->name('clientsEditIndex');
Route::post('/clients/edit/{id}', [DashboardController::class, 'clientsEditPost'])->middleware(['auth', 'verified'])->name('clientsEditPost');
Route::get('/clients/delete/{id}', [DashboardController::class, 'clientsDelete'])->middleware(['auth', 'verified'])->name('clientsDelete');

Route::get('/employees', [DashboardController::class, 'employeesIndex'])->middleware(['auth', 'verified'])->name('employees');
Route::get('/employees/add-new', [DashboardController::class, 'employeesAddNew'])->middleware(['auth', 'verified'])->name('employeesAddNew');
Route::post('/employees/add-new', [DashboardController::class, 'employeesAddNewPost'])->middleware(['auth', 'verified'])->name('employeesAddNewPost');
Route::get('/employees/edit/{id}', [DashboardController::class, 'employeesEditIndex'])->middleware(['auth', 'verified'])->name('employeesEditIndex');
Route::post('/employees/edit/{id}', [DashboardController::class, 'employeesEditPost'])->middleware(['auth', 'verified'])->name('employeesEditPost');
Route::get('/employees/delete/{id}', [DashboardController::class, 'employeesDelete'])->middleware(['auth', 'verified'])->name('employeesDelete');

Route::post('/contactStore', [DashboardController::class, 'contactStore'])->name('contactStore');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
