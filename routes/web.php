<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminLTEController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ShowProductController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\SearchProductController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('contents.main-home');
});

// menampilkan product pada halaman landing page
Route::get('/product', [DashboardController::class, 'show']);

Route::get('/contact', function () {
    return view('contents.contact');
});

Route::get('/service', function () {
    return view('contents.service');
});

Route::get('/about', function () {
    return view('contents.about');
});


// dashboard start
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
// search
Route::get('/tables/search', [SearchProductController::class, 'search'])->middleware('auth');
// show or read
Route::get('/tables', [ShowProductController::class, 'show'])->middleware('auth');
// create
Route::get('/create', [ShowProductController::class, 'create'])->middleware('auth');
// insert
Route::post('/tables', [ShowProductController::class, 'insert'])->middleware('auth');
// update
Route::get('/tables/edit/{id}', [ShowProductController::class, 'update'])->middleware('auth');
Route::patch('/tables/edit/{id}', [ShowProductController::class, 'updateProcess'])->middleware('auth');
// delete
Route::delete('/tables/{id}', [ShowProductController::class, 'delete'])->middleware('auth');


// login
Route::get('/login', [HomeController::class, 'masuk'])->name('login')->middleware('guest');
Route::post('/prosesLogin', [HomeController::class, 'prosesMasuk'])->name('prosesMasuk');
// logout
Route::post('/logout', [HomeController::class, 'logout'])->name('logout');

// daftar
Route::get('/register', [HomeController::class, 'daftar'])->name('register')->middleware('guest');
Route::post('/prosesDaftar', [HomeController::class, 'prosesDaftar'])->name('prosesDaftar');

// admin-category
Route::resource('/categories', AdminCategoryController::class)->except('show')->middleware('admin');
Route::get('/categories/edit/{id}', [AdminCategoryController::class, 'edit'])->middleware('admin');
Route::patch('/categories/edit/{id}', [AdminCategoryController::class, 'update'])->middleware('admin');
