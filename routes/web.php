<?php

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

Route::get('/chats', 'ChatsController@index');
Route::get('/messages', 'ChatsController@fetchAllMessages');
Route::post('/messages', 'ChatsController@sendMessage');


Route::resource('products', '\App\Http\Controllers\ProductsController');


Auth::routes();
Route::post('reset-password', 'AuthController@sendPasswordResetLink');

// handle reset password form process
Route::post('reset/password', 'AuthController@callResetPassword');


Route::get('/{any?}', function () {
    return view('welcome');
});



Route::get('/home', 'HomeController@index')->name('home');



