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
// basic routing
Route::get('/hello', function () {
    return 'Hello Word';
});

Route::get('/world', function () {
    return 'World';
});

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/about', function () {
    return '2341760107';
});

// route parameters
Route::get('/user/{name}', function ($name) {
    return 'Nama Saya '.$name;
});

Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId. "Komentar ke-:".$commentId;
});

Route::get('/articels/{id}', function ($Id) {
    return 'Halaman Artikel dengan ID-'.$Id;
});

Route::get('/user/{name?}',function ($name = null){
    return 'Nama Saya '.$name;
});

Route::get('/user/{name?}',function ($name = 'john') {
    return 'Nama Saya '.$name;
});

