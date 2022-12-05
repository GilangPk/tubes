<?php

use App\Http\Controllers\api\v1\LogoutController;
use App\Http\Controllers\api\v1\LoginController;
use App\Http\Controllers\api\v1\RegisterController;
use App\Http\Controllers\api\v1\PekerjaanController;
use App\Http\Controllers\api\v1\HubunganController;
use App\Http\Controllers\api\v1\UmurController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register', App\Http\Controllers\Api\RegisterController::class)->name('register');
Route::post('/login', App\Http\Controllers\Api\LoginController::class)->name('login');
Route::post('/logout', App\Http\Controllers\Api\LogoutController::class)->name('logout');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/v1/pekerjaan', [PekerjaanController::class, 'index']);
    Route::get('/v1/hubungan', [HubunganController::class, 'index']);
    Route::get('/v1/umur-rentang', [UmurController::class, 'index']);
});
