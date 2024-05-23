<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Admin\AdminNavbar;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Post\PostHeroController;
use App\Http\Controllers\Admin\AdminSlideController;


Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('about', [PageController::class, 'about'])->name('about');
Route::get('gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('contact', [PageController::class, 'contact'])->name('contact');
Route::get('details', [PageController::class, 'details'])->name('details');
// Route::get('property-details', [PageController::class, 'property_details'])->name('property_details');
//
// Route::get('login', [AuthController::class, 'login'])->name('login');
// Route::get('register', [AuthController::class, 'register'])->name('register');
// Route::get('forget-password', [AuthController::class, 'forget_password'])->name('forget_password');
Route::get('staff', [StaffController::class, 'staff_login'])->name('staff_login');
Route::get('staff/register', [StaffController::class, 'staff_register'])->name('staff_register');
Route::get('staff/forget-password', [StaffController::class, 'staff_forget_password'])->name('staff_forget_password');

Route::get('admin', [AdminController::class, 'admin_login'])->name('admin_login');
Route::get('admin/register', [AdminController::class, 'admin_register'])->name('admin_register');
Route::get('admin/forget-password', [AdminController::class, 'admin_forget_password'])->name('admin_forget_password');

Route::post('admin/register/submit', [AdminController::class, 'admin_register_submit'])->name('admin_register_submit');
Route::post('admin/login/submit', [AdminController::class, 'admin_login_submit'])->name('admin_login_submit');
// Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard'])->name('admin_dashboard');
Route::get('admin/dashboard', [AdminController::class, 'admin_dashboard'])->middleware('admin:admin')->name('admin_dashboard');
Route::get('admin/add-property', [AdminController::class, 'admin_add_property'])->middleware('admin:admin')->name('admin_add_property');


Route::get('admin/slide/index', [AdminSlideController::class, 'index'])->middleware('admin:admin')->name('admin_slide_index');
Route::post('admin/slide/add', [AdminSlideController::class, 'add'])->middleware('admin:admin')->name('admin_slide_add');





Route::get('admin/logout', [AdminController::class, 'admin_logout'])->name('admin_logout');