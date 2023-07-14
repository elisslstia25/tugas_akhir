<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Dosen\DosenController;
use App\Http\Middleware\ceklevel;
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

// Route::get('index', [DosenController::class, 'index']);
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('loginpost', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

include "_/admin.php";
include "_/dosen.php";

// Route::group(['middleware' => ['auth', 'ceklevel:admin']], function() {
//     include "_/admin.php";
// });
// Route::group(['middleware' => ['auth', 'ceklevel:dosen']], function() {
//     include "_/dosen.php";
// });
