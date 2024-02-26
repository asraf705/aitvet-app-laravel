<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\website\WebsiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\Modul\DepertmentController;
use App\Http\Controllers\Admin\Modul\AdmissionController;
use App\Http\Controllers\Admin\Modul\TeacherController;
use App\Http\Controllers\Admin\Teacher\TeacherinfoController;
use App\Http\Controllers\Admin\BannerImageController;

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
Route::middleware(['auth', 'user-access:student'])->group(function () {

    Route::get('/student/home', [HomeController::class, 'student'])->name('student.home');
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
    Route::resources(['banner-image' => BannerImageController::class]);



    //   Account start
    Route::get('/admin/account/admin',[AdminController::class,'adminaccount'])->name('admin.account.admin');
    Route::get('/admin/account/sub-admin',[AdminController::class,'subAdminaccount'])->name('admin.account.sub-admin');
    Route::get('/admin/account/student',[AdminController::class,'studentaccount'])->name('admin.account.student');
    Route::get('/admin/account/{id}',[AdminController::class,'editAccount'])->name('edit.account');
    Route::post('/update/category',[AdminController::class,'updateAccount'])->name('update.account');

    //   Account end



});

/*------------------------------------------
--------------------------------------------
All Subadmin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:subadmin'])->group(function () {

    Route::get('/subadmin/home', [HomeController::class, 'subAdminHome'])->name('subadmin.home');
});
