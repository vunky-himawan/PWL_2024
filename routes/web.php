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

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello", function () {
    return "Hello World";
});

Route::get("/world", function () {
    return "World";
});

Route::get("/about", function () {
    return "NIM : 2241720005 </br> NAMA : Vunky Himawan";
});

Route::get("/user/{name}", function (string $name) {
    return "Nama saya $name";
});

Route::get("/posts/{post}/comments/{comment}", function (string $postId, string $commentId) {
    return "Post ke-$postId Komentar ke-$commentId";
});

Route::get("/articles/{id}", function (string $articleId) {
    return "Halaman artikel dengan ID $articleId";
});

Route::get("/user/profile", function () {
    return "Hallo nama saya Vunky Himawan</br>saya Semester 4 di Politeknik Negeri Malang";
})->name('profile');