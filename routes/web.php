<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can regisster web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('layout.landing');
})->name('landing')->middleware("guest");

Route::prefix('/auth-user')->group(function () {
    Route::get('/login', [UserController::class, 'viewLogin'])->name('login')->middleware("guest");
    Route::get('/register', [UserController::class, 'viewRegister'])->middleware("guest");
});

// Route::prefix('/users')->group(function(){
// Route::get('/home', [AuthController::class, 'viewHome'])->name('user.home');
// });

 
Route::middleware("role.access:pengguna")->group(function(){
    Route::get('/pengguna/home', [AuthController::class, 'viewHome'])->name("user.home");
    Route::get('/gallery', [AuthController::class, 'viewGallery'])->name("user.gallery");
});
Route::middleware("role.access:petugas")->group(function(){
    Route::get('/petugas/home', [AuthController::class, 'viewSecurity'])->name("security.home");
});
Route::middleware("role.access:admin")->group(function(){
    Route::get('/admin/home', [AuthController::class, 'viewAdmin'])->name("admin.home");
});

Route::post('/users/login', [UserController::class, 'loginUser'])->name("postLogin");
Route::post("/users/create", [UserController::class, "create"]);

// Route::resource("book", [BookController::class])->except(['show','edit','update','delete']);

Route::get('/sidebar-ui', [AuthController::class, "sideview"]);

Route::get("/logout", [UserController::class, "logouts"]);