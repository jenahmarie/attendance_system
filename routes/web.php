<?php
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
 });

 // Show the login form
Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login.form');
Route::get('/attendance', [AttendanceController::class, 'attendancePage'])->name('attendancepage');
