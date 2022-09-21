<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get("/home",[HomeController::class, "index"])->name('home');
Route::get('/', function () {
    return view('Frontend.index');
});

//Admin
Route::middleware('auth')->prefix('dashboard')->group(function (){
    Route::get("/",[AdminController::class, "index"])->name('dashboard');
    Route::get("category",[CategoryController::class, "index"])->name('dashboard_category');
    Route::get("category/create",[CategoryController::class, "create"])->name('dashboard_category_create');
    Route::post("category/update",[CategoryController::class, "update"])->name('dashboard_category_update');
    Route::get("category/delete",[CategoryController::class, "delete"])->name('dashboard_category_delete');
    Route::get("category/show",[CategoryController::class, "show"])->name('dashboard_category_show');
});


Route::get("/admin/login",[AdminController::class, "login"])->name('admin_login');
Route::post("/admin/authenticate",[AdminController::class, "authenticate"])->name('admin_authenticate');
Route::get("/admin/logout",[AdminController::class, "logout"])->name('admin_logout');
