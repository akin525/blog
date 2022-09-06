<?php

use App\Http\Controllers\AirtimeController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout', function(){
    Auth::logout();
    \RealRashid\SweetAlert\Facades\Alert::success('Logout', 'You have successful logout');
    return view('auth.login');
});
Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('airtime', [AirtimeController::class, 'index'])->name('airtime');
    Route::post('mcdairtime', [AirtimeController::class, 'mcdbuy'])->name('mcdairtime');
    Route::post('easyairtime', [AirtimeController::class, 'easyaccessdbuy'])->name('easyairtime');
});
require __DIR__.'/auth.php';
