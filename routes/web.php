<?php

use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PostCommentController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminPostController;
use Illuminate\Support\Facades\Route;


Route::post('newsletter', NewsletterController::class);

Route::get('/', [PostController::class, 'index'])->name('home');

Route::get('/posts/{post:slug}', [PostController::class, 'show']);
Route::post('/posts/{post:slug}/comments', [PostCommentController::class, 'store']);

Route::get('register',[RegisterController::class, 'create'])->middleware('guest');
Route::post('register',[RegisterController::class, 'store'])->middleware('guest');

Route::get('login',[SessionsController::class, 'create'])->middleware('guest');
Route::post('login',[SessionsController::class, 'store'])->middleware('guest');

Route::post('logout',[SessionsController::class, 'destroy'])->middleware('auth');

Route::post('admin/posts/', [AdminPostController::class, 'store'])->middleware('can:admin');
Route::get('admin/posts/create', [AdminPostController::class, 'create'])->middleware('can:admin');
Route::get('admin/posts/', [AdminPostController::class, 'index'])->middleware('can:admin');
Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit'])->middleware('can:admin');
Route::patch('admin/posts/{post}', [AdminPostController::class, 'update'])->middleware('can:admin');
Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy'])->middleware('can:admin');