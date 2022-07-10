<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Models\User;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('admin', function () {
    return view('admin.dash');
});

Route::get('admin/user', function () {
    $users=User::all();
    $data=[
        'users'=>$users
    ];
    return view('admin.user',$data);
});

Route::get('admin/user-entry', function () {
    return view('admin.user_entry');
});

Route::get('admin/interest', function () {
    return view('admin.interest');
});

Route::get('admin/course', function () {
    return view('admin.course');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']);
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom');
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom');
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');
Route::get('information', [CustomAuthController::class, 'customInformation'])->name('information');

Route::get('user/dash', function () {
    return view('user.dashboard');
});

Route::get('user/course', function () {
    return view('user.course');
});
Route::get('user/course_cat', function () {
    return view('user.course_cat');
});