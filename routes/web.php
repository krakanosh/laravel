<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'MainController@index');
Route::get('/about', 'AboutController@index')->name('about.index');
Route::get('/contacts', 'ContactController@index')->name('contact.index');

Route::get('/posts', 'PostController@index')->name('post.index');
Route::get('/posts/create', 'PostController@create')->name('post.create');
Route::post('/posts', 'PostController@store')->name('post.store');
Route::get('/posts/{post}', 'PostController@show')->name('post.show');
Route::get('/posts/{post}/edit', 'PostController@edit')->name('post.edit');
Route::patch('/posts/{post}', 'PostController@update')->name('post.update');
Route::delete('/posts/{post}', 'PostController@destroy')->name('post.delete');


Route::get('/posts/update', 'PostController@update');
Route::get('/posts/delete', 'PostController@delete');
Route::get('/posts/restore', 'PostController@restore');
Route::get('/posts/first_or_create', 'PostController@firstOrCreate');
Route::get('/posts/update_or_create', 'PostController@updateOrCreate');

Route::get('/products', 'ProductController@index')->name('product.index');
Route::get('/products/create', 'ProductController@create')->name('product.create');
Route::post('/products', 'ProductController@store')->name('product.store');
Route::get('/products/{product}', 'ProductController@show')->name('product.show');
Route::get('/products/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('/products/{product}', 'ProductController@update')->name('product.update');
Route::delete('/products/{product}', 'ProductController@destroy')->name('product.destroy');

// Route::get('/products/delete', 'ProductController@delete');
// Route::get('/products/restore', 'ProductController@restore');
// Route::get('/products/create', 'ProductController@firstOrCreate');


Route::get('/discount', 'DiscountController@index');
// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
