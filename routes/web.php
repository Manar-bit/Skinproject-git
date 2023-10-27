<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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


Route::get('/',[IndexController::class ,'index'])->name('index');
Route::get('contact',[IndexController::class ,'contact'])->name('contact');
Route::get('tarifs',[IndexController::class ,'tarifs'])->name('tarifs');
Route::get('galerie',[IndexController::class ,'galerie'])->name('galerie');
Route::get('epilationlazer',[IndexController::class ,'epilationlazer'])->name('epilationlazer');
Route::get('technologies',[IndexController::class ,'technologies'])->name('technologies');
Route::get('about',[IndexController::class ,'about'])->name('about');
Route::get('chequesCad',[IndexController::class ,'chequesCad'])->name('chequesCad');
Route::get('bonAchat',[IndexController::class ,'bonAchat'])->name('bonAchat');
Route::get('/contact', 'ContactController@contact')->name('contact');
Route::post('/contact', 'ContactController@contactPost')->name('contactPost');

