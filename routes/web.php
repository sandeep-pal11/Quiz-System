<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::view('admin-login', 'admin-login');
Route::post('admin-login', [AdminController::class,'login']);
Route::get('dashboard', [AdminController::class,'dashboard']);
Route::get('admin-categories', [AdminController::class,'categories']);
Route::get('admin-logout', [AdminController::class,'logout']);
Route::post('add-category', [AdminController::class,'addcategory']);
Route::get('category/delete/{id}', [AdminController::class,'deletecategory']);
Route::match(['get', 'post'], 'add-quiz', [AdminController::class, 'addquiz']);
Route::Post('add-mcq', [AdminController::class,'addmcqs']);
Route::get('end-quiz', [AdminController::class,'endquiz']);
Route::get('show-quiz/{id}/{quizName}', [AdminController::class, 'showquiz'])->name('show.quiz');
Route::get('quiz-list/{id}/{category}', [AdminController::class,'quizlist']);


Route::get('/', [UserController::class,'welcome']);
Route::get('/user-quiz-list/{id}/{category}', [UserController::class,'userquizlist']);
Route::get('/start-quiz/{id}/{name}', [UserController::class,'startquiz']);
Route::view('/user-signup','user-signup');
Route::Post('/user-signup', [UserController::class,'usersignup']);
Route::get('/user-logout', [UserController::class,'userlogout']);
Route::get('/user-quiz-start', [UserController::class,'quizstart']);
Route::view('/user-login','user-login');
Route::Post('/user-login', [UserController::class,'userlogin']);
Route::get('/user-login-quiz', [UserController::class,'userloginquiz']);