<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\Api\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('custom-login', [AuthController::class, 'Login'])->name('login.custom');
Route::post('custom-registration', [AuthController::class, 'Registration'])->name('register.custom');
Route::post('validate-token', [AuthController::class, 'validateToken'])->name('validate.token');
