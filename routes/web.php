<?php

use App\Http\Controllers\Many_to_ManyController;
use App\Http\Controllers\One_to_manyController;
use App\Http\Controllers\One_to_OneController;
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
    return view('one-one.user');
})->name('welcome');

//One-To-One
Route::post('post-user',[One_to_OneController::class,'user'])->name('create.user');
Route::post('posts', [One_to_OneController::class, 'post'])->name('create.posts');
Route::get('post', [One_to_OneController::class, 'postIndex'])->name('watch.posts');

//One-To-Many
Route::get('comment-posts',[One_to_manyController::class,'indexPost'])->name('Allposts');
Route::get('comment-images', [One_to_manyController::class, 'indexImage'])->name('Allimages');
Route::post('post-comment/{id}',[One_to_manyController::class,'postComment'])->name('Postcomment');
Route::post('img-comment/{id}', [One_to_manyController::class, 'imgComment'])->name('Imgcomment');

//Many-To-Many
Route::post('tag-post/{id}', [Many_to_ManyController::class, 'tagPost'])->name('storetag');
Route::post('tag-image/{id}', [Many_to_ManyController::class, 'tagImage'])->name('imgtag');
Route::get('tag-posts', [Many_to_ManyController::class, 'allposts'])->name('tagposts');
Route::get('tag-images', [Many_to_ManyController::class, 'allimage'])->name('tagimages');