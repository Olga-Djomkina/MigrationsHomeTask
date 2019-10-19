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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    $result=factory(\App\User::class, 5)->create();
    dd($result);
});

Route::get('/post', function () {
    $result=factory(\App\Post::class, 5)->create();
    dd($result);
});