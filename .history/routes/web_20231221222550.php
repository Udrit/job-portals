<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Employer\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login-form',[RegisterController::class,'loginForm'])->name('login.form');
Route::get('/register-form',[RegisterController::class,'registerForm'])->name('register.form');
Route::get('/employer-form',[RegisterController::class,'employerForm'])->name('employer.form');
Route::post('/user/register-form',[RegisterController::class,'userRegisterStore'])->name('user.register.submit');
Route::post('/employer/register-form',[RegisterController::class,'companyRegisterStore'])->name('company.register.submit');
Route::post('/login-submit',[RegisterController::class,'loginAuthenticate'])->name('login.submit');





Route::get('/verify-email/{token}',[RegisterController::class,'verifyEmail'])->name('verify.email');


//admin page
Route::get('/admin-dashboard',[AdminController::class,'index'])->name('admin.dashboard');
Route::get('/admin-logout',[AdminController::class,'logout'])->name('admin.logout');
Route::get('/admin/users-list',[AdminController::class,'userList'])->name('admin.users.list');

//company only
Route::get('/admin/users-list',[ProfileController::class,'userList'])->name('company.profile');



//common routes
// Route::get('/admin-dashboard',[AdminController::class,'index'])->name('common.dashboard');
