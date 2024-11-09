<?php
use App\Http\Controllers\AttendanceController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
 });

 // Show the login form
Route::get('/login', [LoginController::class, 'showLoginPage'])->name('login.form');
Route::get('/attendance', [AttendanceController::class, 'attendancePage'])->name('attendancepage');
Route::get('/myattendance', [AttendanceController::class, 'myattendancePage'])->name('myattendancepage');
// Define a route for the employee search functionality
Route::get('/search-employees', [AttendanceController::class, 'search'])->name('employees.search');
// Route for storing attendance
Route::post('/store-attendance', [AttendanceController::class, 'store']);
// Route for displaying data in form
Route::get('/admin', [AdminController::class, 'showAdminPage'])->name('admin.page');
Route::get('/admin/allemployees', [AdminController::class, 'allEmployeesPage'])->name('employees.page');
// Route::get('/attendance/{employeeId}', 'AttendanceController@getAttendance');
Route::get('/attendance/{employeeId}', [AttendanceController::class, 'getAttendance']);
