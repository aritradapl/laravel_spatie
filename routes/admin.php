<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\RegisterController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Modules\Page1\Page1Controller;
use App\Http\Controllers\Admin\Modules\AddEmployeeRole\EmployeesController;

Route::get('register', [RegisterController::class, 'index'])->name('admin.register');
Route::post('register', [RegisterController::class, 'store'])->name('admin.register.post');
Route::get('login', [LoginController::class, 'index'])->name('admin.login');
Route::post('login', [LoginController::class, 'checkLogin'])->name('admin.login.post');
Route::get('logout', [LoginController::class,'logout'])->name('admin.logout');

Route::group(['middleware' => 'admin.auth'], function () {
    Route::middleware('workshop.permission:view_home')->group(function () {
        // User Dashboard
        Route::get('home', [DashboardController::class, 'index'])->name('admin.home');
    });
    Route::middleware('workshop.permission:view_page1')->group(function () {
        Route::get('page1', [Page1Controller::class, 'index'])->name('admin.page1');
    });
    Route::middleware('workshop.permission:add_employees_role')->group(function () {
        Route::get('employees', [EmployeesController::class, 'index'])->name('admin.employees');
        Route::post('employee-add-role',[EmployeesController::class, 'store'])->name('admin.employees.post');
    });
    Route::get('employees-remove-role', [EmployeesController::class, 'removeRoleView'])->name('admin.employees.remove.role.view');
    Route::post('employees-remove-role-post',[EmployeesController::class, 'removeRole'])->name('admin.employees.remove.role');
});
