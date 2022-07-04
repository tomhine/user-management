<?php

use App\Http\Controllers\ManagedUserController;
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

Route::controller(ManagedUserController::class)->middleware(['auth'])->group(function () {
    Route::get('/', 'index')->name('user.index');
});

require __DIR__.'/auth.php';
