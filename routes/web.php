<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/test', [App\Http\Controllers\HomeController::class, 'test'])->name('home');

// Route::get('/test', function () {
//untuk menampilkan data keseluruhan pengguna yang terontetikasi atau login 
//     return $user = Auth::user();

//  $user = Auth::id();  untuk menampilkan data id user saja tidak data keseluruhan
// 
// if(Auth::check()){
//  sebagai pengecekan user atau pengguna    
//}
// });

Route::get('admin/home', [\App\Http\Controllers\AdminController::class, 'index'])->name('admin.home')->middleware('is_admin');
Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');

Route::get('admin/books',[App\Http\Controllers\AdminController::class,'books'])
->name('admin.books')
->middleware('is_admin');
