<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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

Route::get('/',[PostController::class,'index'])->name('home');
Route::get('/posts/{post:slug}',[PostController::class,'show']);

Route::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');

Route::get('/login',[SessionsController::class,'create'])->middleware('guest');
Route::post('/login',[SessionsController::class,'check'])->middleware('guest');

Route::post('/logout',[SessionsController::class,'destroy'])->middleware('auth');

// Route::get('/categories/{category:slug}',function(Category $category){
//     return view('posts',[
//         'posts'=>$category->posts,
//         'currentCategory'=>$category,
//         'categories'=>Category::all()
//     ]);
// });

// Route::get('/authors/{author:username}',function(User $author){
//     return view('posts.index',[
//         'posts'=>$author->posts,
       
//     ]);
// });
