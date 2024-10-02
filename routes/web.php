<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\myController;
use App\Http\Controllers\MailController;



use App\Mail\Controllers\LangController;


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

Route::get('/', function () {
    return view('welcome');
});


Route::get('test/{mylanguage}', function ($mylanguage) {
  
App::setlocale($mylanguage);
    return view('test');
})->name('test');

Route::post('/test/test_submit', [LangController::class, 'change']);


Route::get('insert', [myController::class, 'insert_view'])->name('');
// data insert krny wala route
Route::post('insert_data', [myController::class, 'insert_data'])->name('insert_file');
// login file wala route
Route::get('login', [myController::class, 'login_view'])->name('login_file');
Route::post('login_check', [myController::class, 'login_check'])->name('');
/// table wali file ka route
Route::post('login_check', [myController::class, 'login_check'])->name('');
Route::get('table_view', [myController::class, 'table'])->name('table_file');
// Dlete wala route
Route::post('delete/{id}', [myController::class, 'delete'])->name('');

Route::get('update/{up_id}', [myController::class, 'update_show'])->name('');
Route::post('update/upd/{update_id}', [myController::class, 'update_data'])->name('');


Route::get('forget', [myController::class, 'forget'])->name('forget_file');

Route::post('email', [myController::class,'sendEmail'])->name('email');

Route::post('verify', [myController::class,'verify_code'])->name('');
