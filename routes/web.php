<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ScheduleController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminDashBoard;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/upload/csv',[ScheduleController::class,'upload'])->name('upload.csv');

Route::post('/read/csv',[ScheduleController::class,'uploadCsv'])->name('read.csv');

Route::get('/form/student',[ScheduleController::class,'studentForm'])->name('form.student');
Route::post('/form/store',[ScheduleController::class,'studentStore'])->name('form.store');
Route::get('/google/login',[ScheduleController::class,'googleLogin'])->name('google.login');

Route::middleware('shareData')->group(function(){
    Route::get('/test/view1',[ScheduleController::class,'view1'])->name('test.view1');
    Route::get('/test/view2',[ScheduleController::class,'view2'])->name('test.view2');
    Route::get('/test/view3',[ScheduleController::class,'view3'])->name('test.view3');
    Route::get('/test/view4',[ScheduleController::class,'view4'])->name('test.view4');
    Route::get('/test/view5',[ScheduleController::class,'view3'])->name('test.view5');
    Route::get('/test/view6',[ScheduleController::class,'view4'])->name('test.view6');
    
});

Route::get('/product/form',[ProductController::class,'productForm'])->name('product.form');
Route::post('/product/store',[ProductController::class,'productStore'])->name('product.store');
Route::get('/product/details',[ProductController::class,'productDetails'])->name('product.details');

//Dashboard Routes

Route::get('/admin/dashboard',[AdminDashBoard::class,'dashboard'])->name('admin.dashboard');



