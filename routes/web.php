<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('/f_index');
});
Route::get('/f_about', function () {
    return view('/f_about');
});
Route::get('/f_category', function () {
    return view('/f_category');
});
Route::get('/f_news', function () {
    return view('/f_news');
});
Route::get('/f_success', function () {
    return view('/f_success');
});
