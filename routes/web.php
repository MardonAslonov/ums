<?php

use App\Http\Controllers\MirshodController;
use App\Http\Controllers\MardonController;
use App\Http\Controllers\UmsController;
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

// Route::get('/salom', function () {
//     return view('salom');
// });



// Route::get('/usera/{id}', [UmsController::class, 'show']);
// Route::get('/user1/{id}', [UmsController::class, 'show1']);

Route::get('/1bet', function () {
    return view('1bet');
});

// Route::get('/aaa', function () {
//     return view('2bet');
// });
// Route::get('/4bet', function () {
//     return view('3bet');
// });

Route::get('/2bet', [MardonController::class, 'index'])->name('2bet');
Route::get('/3bet', [MirshodController::class, 'index'])->name('3bet');
Route::get('/create', [MardonController::class, 'create']);
Route::get('/create1', [MirshodController::class, 'create']);
Route::post('/store', [MardonController::class, 'store']);
Route::post('/store1', [MirshodController::class, 'store']);
Route::get('/edit/{id}', [MardonController::class, 'edit'])->name('edit');
Route::post('/updateUserMardonTable/{id}', [MardonController::class, 'updateUserMardonTable'])->name('updateUserMardonTable');
Route::get('/delete/{id}', [MardonController::class, 'delete'])->name('delete');
Route::get('/deleteMirshod/{id}', [MirshodController::class, 'deleteMirshod'])->name('deleteMirshod');
Route::get('/editMirshod/{id}', [MirshodController::class, 'editMirshod'])->name('editMirshod');
Route::post('/updateUserMirshodTable/{id}', [MirshodController::class, 'updateUserMirshodTable'])->name('updateUserMirshodTable');



