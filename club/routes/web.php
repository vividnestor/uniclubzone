<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleLoginController;

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
Route::get('Club/', function () {
    return view('Club/index');
});
Route::get('Club/aboutClub', function () {
    return view('Club/aboutClub');
});
Route::get('Club/organizationalChart', function () {
    return view('Club/organizationalChart');
});
Route::get('Club/membership', function () {
    return view('Club/membership');
});
Route::get('Club/batches', function () {
    return view('Club/batches');
});

// item event
Route::get('Club/Events/', function () {
    return view('Club/Events/index');
});
Route::get('Club/Events/event', function () {
    return view('Club/Events/event');
});
Route::get('Club/Events/competition', function () {
    return view('Club/Events/competition');
});
Route::get('Club/Events/gallery', function () {
    return view('Club/Events/gallery');
});
Route::get('User/', function () {
    return view('User/index');
});
Route::get('User/participation', function () {
    return view('User/participation');
});

Route::craftablePro('admin');

Route::get('/login/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('auth.google');
Route::get('/login/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('auth.google.callback');

/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('clubs', [App\Http\Controllers\CraftablePro\ClubController::class, 'index'])->name('clubs.index');
    Route::get('clubs/create', [App\Http\Controllers\CraftablePro\ClubController::class, 'create'])->name('clubs.create');
    Route::post('clubs', [App\Http\Controllers\CraftablePro\ClubController::class, 'store'])->name('clubs.store');
    Route::get('clubs/edit/{club}', [App\Http\Controllers\CraftablePro\ClubController::class, 'edit'])->name('clubs.edit');
    Route::match(['put', 'patch'], 'clubs/{club}', [App\Http\Controllers\CraftablePro\ClubController::class, 'update'])->name('clubs.update');
    Route::delete('clubs/{club}', [App\Http\Controllers\CraftablePro\ClubController::class, 'destroy'])->name('clubs.destroy');
    Route::post('clubs/bulk-destroy', [App\Http\Controllers\CraftablePro\ClubController::class, 'bulkDestroy'])->name('clubs.bulk-destroy');
});


/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('events', [App\Http\Controllers\CraftablePro\EventController::class, 'index'])->name('events.index');
    Route::get('events/create', [App\Http\Controllers\CraftablePro\EventController::class, 'create'])->name('events.create');
    Route::post('events', [App\Http\Controllers\CraftablePro\EventController::class, 'store'])->name('events.store');
    Route::get('events/edit/{event}', [App\Http\Controllers\CraftablePro\EventController::class, 'edit'])->name('events.edit');
    Route::match(['put', 'patch'], 'events/{event}', [App\Http\Controllers\CraftablePro\EventController::class, 'update'])->name('events.update');
    Route::delete('events/{event}', [App\Http\Controllers\CraftablePro\EventController::class, 'destroy'])->name('events.destroy');
    Route::post('events/bulk-destroy', [App\Http\Controllers\CraftablePro\EventController::class, 'bulkDestroy'])->name('events.bulk-destroy');
});


/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('categories', [App\Http\Controllers\CraftablePro\CategoryController::class, 'index'])->name('categories.index');
    Route::get('categories/create', [App\Http\Controllers\CraftablePro\CategoryController::class, 'create'])->name('categories.create');
    Route::post('categories', [App\Http\Controllers\CraftablePro\CategoryController::class, 'store'])->name('categories.store');
    Route::get('categories/edit/{category}', [App\Http\Controllers\CraftablePro\CategoryController::class, 'edit'])->name('categories.edit');
    Route::match(['put', 'patch'], 'categories/{category}', [App\Http\Controllers\CraftablePro\CategoryController::class, 'update'])->name('categories.update');
    Route::delete('categories/{category}', [App\Http\Controllers\CraftablePro\CategoryController::class, 'destroy'])->name('categories.destroy');
    Route::post('categories/bulk-destroy', [App\Http\Controllers\CraftablePro\CategoryController::class, 'bulkDestroy'])->name('categories.bulk-destroy');
});


/* Auto-generated admin routes */
Route::middleware('craftable-pro-middlewares')->prefix('admin')->name('craftable-pro.')->group(function () {
    Route::get('club-pages', [App\Http\Controllers\CraftablePro\ClubPageController::class, 'index'])->name('club-pages.index');
    Route::get('club-pages/create', [App\Http\Controllers\CraftablePro\ClubPageController::class, 'create'])->name('club-pages.create');
    Route::post('club-pages', [App\Http\Controllers\CraftablePro\ClubPageController::class, 'store'])->name('club-pages.store');
    Route::get('club-pages/edit/{clubPage}', [App\Http\Controllers\CraftablePro\ClubPageController::class, 'edit'])->name('club-pages.edit');
    Route::match(['put', 'patch'], 'club-pages/{clubPage}', [App\Http\Controllers\CraftablePro\ClubPageController::class, 'update'])->name('club-pages.update');
    Route::delete('club-pages/{clubPage}', [App\Http\Controllers\CraftablePro\ClubPageController::class, 'destroy'])->name('club-pages.destroy');
    Route::post('club-pages/bulk-destroy', [App\Http\Controllers\CraftablePro\ClubPageController::class, 'bulkDestroy'])->name('club-pages.bulk-destroy');
});
