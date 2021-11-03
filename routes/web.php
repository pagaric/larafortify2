<?php

use App\Http\Controllers\ImgController;
use Illuminate\Support\Facades\Artisan;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/myHome', function(){
    return view('myHome');
})->middleware('auth');

Route::get('/afterlogout', function(){
    return view('afterLogout');
});

Route::get('home', function(){
    return view('home');
})->middleware('auth');

Route::get('/img', [ImgController::class, 'index'])->name('img.index');
Route::post('/img', [ImgController::class, 'store'])->name('img.store');

// Route::get('/link', function(){
//     Artisan::call('storage:link');
// });
