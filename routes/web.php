<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\Admin\Modul\DepertmentController;
use App\Http\Controllers\Admin\Modul\AdmissionController;
use App\Http\Controllers\Admin\Modul\TeacherController;
use App\Http\Controllers\Admin\Teacher\TeacherinfoController;

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


Route::get('/', [WebsiteController::class, 'index'])->name('home');
Route::get('/about', [WebsiteController::class, 'about'])->name('about');
Route::get('/instructor', [WebsiteController::class, 'instructor'])->name('instructor');
Route::get('/notice', [WebsiteController::class, 'notice'])->name('notice');
Route::get('/admission', [WebsiteController::class, 'admission'])->name('admission');
Route::get('/admission/form', [WebsiteController::class, 'admissionform'])->name('admissionform');
Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');


Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:user'])->group(function () {

    Route::get('/user/home', [HomeController::class, 'user'])->name('user.home');
});

/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {

    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
    Route::resources(['depertment-category' => DepertmentController::class]);
    Route::resources(['admission-category' => AdmissionController::class]);
    Route::resources(['teacher-category' => TeacherController::class]);
    Route::resources(['teachers-info' => TeacherinfoController::class]);



});

/*------------------------------------------
--------------------------------------------
All Subadmin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:manager'])->group(function () {

    Route::get('/manager/home', [HomeController::class, 'subAdminHome'])->name('manager.home');
});
