<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\WelcomeController;
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

// Route::get("/hello", function () {
//     return "Hello World";
// });

// Route::get("/world", function () {
//     return "World";
// });

// Route::get("/user/profile", function () {
//     return "Hallo nama saya Vunky Himawan</br>saya Semester 4 di Politeknik Negeri Malang";
// })->name('profile');

// Route::get("/user/{name}", function (string $name) {
//     return "Nama saya $name";
// });

// Route::get("/posts/{post}/comments/{comment}", function (string $postId, string $commentId) {
//     return "Post ke-$postId Komentar ke-$commentId";
// });

Route::get("/hello", [WelcomeController::class, 'hello']);
Route::get('/', [HomeController::class, 'index']);
Route::get("/about", [AboutController::class, 'about']);
Route::get("/articles/{id}", [ArticleController::class, 'articles']);

Route::resource("photos", PhotoController::class)->except([
    'create',
    'store',
    'update',
    'destroy'
]);

Route::get("/greeting", [WelcomeController::class, 'greeting']);