<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AttendanceController;

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

Route::middleware('auth')->group(function() {
    Route::get('/', [AuthController::class, 'index']);
});
Route::get('/attendance', [AuthController::class, 'date']);
Route::post('/work_start', [AttendanceController::class, 'workStart']);
Route::post('/work_end', [AttendanceController::class, 'workEnd']);
Route::post('/break_start', [AttendanceController::class, 'breakStart']);
Route::post('/break_end', [AttendanceController::class, 'breakEnd']);

