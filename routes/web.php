<?php

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

use App\Models\Ad;

Route::get('/', function () {
    $ads = Ad::all();
    return view('frontpage', ['ads' => $ads]);
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

use App\Http\Controllers\AdController;

Route::post('ads', [AdController::class, 'store'])->name('ads.store');

require __DIR__.'/auth.php';
use App\Http\Controllers\AdController;

Route::get('/ads/{ad}', [AdController::class, 'show'])->name('ads.show');
