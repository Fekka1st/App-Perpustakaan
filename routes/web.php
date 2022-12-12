<?php

use App\Http\Controllers\Controller;
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

Route::get('admin/home', [App\Http\Controllers\AdminController::class, 'home'])->name('admin.home')->middleware('is_admin');
Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

//pengelolaan buku

Route::get('admin/books', [App\Http\Controllers\AdminController::class, 'books'])
    ->name('admin.books')
    ->middleware('is_admin');

Route::post('admin/books', [App\Http\Controllers\AdminController::class, 'submit_book'])
    ->name('admin.book.submit')
    ->middleware('is_admin');

Route::patch('admin/books/update', [App\Http\Controllers\AdminController::class, 'update_book'])
    ->name('admin.book.update')
    ->middleware('is_admin');

Route::get('admin/ajaxadmin/dataBuku/{id}', [App\Http\Controllers\AdminController::class, 'getDataBuku']);

Route::post('admin/books/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete_book'])
    ->name('admin.book.delete')
    ->middleware('is_admin');

Route::get('admin/print_books', [\App\Http\Controllers\AdminController::class, 'print_books'])
    ->name('admin.print.books')
    ->middleware('is_admin');

Route::get('admin/books/export', [App\Http\Controllers\AdminController::class, 'export'])
    ->name('admin.book.export')->middleware('is_admin');

Route::post('admin/books/import', [App\Http\Controllers\AdminController::class, 'import'])
    ->name('admin.books.import')->middleware('is_admin');
