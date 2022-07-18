<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\UserController;


// Home Page
Route::get('/', [HomeController::class, 'index']);

// ACCOUNT ROUTES

// Sign up page
Route::get('/signup', [UserController::class, 'create'])->middleware('guest');

// Store user in db
Route::post('/user', [UserController::class, 'store']);

// Log out from account
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Send to log in form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Log in into account
Route::post('/user/authentication', [UserController::class, 'authentication']);


// DOCUMENT ROUTES

// Send to upload document form
Route::get('/documents/upload',[DocumentController::class,'upload'])->middleware('auth');

// Store document in db
Route::post('/documents',[DocumentController::class,'store'])->middleware('auth');

// Show documents list
Route::get('/documents',[DocumentController::class,'show'])->middleware('auth');

// Download document
Route::get('documents/{file}/download',[DocumentController::class,'download'])->middleware('auth');

// View document
Route::get('documents/{id}/view',[DocumentController::class,'view'])->middleware('auth');

// Delete document
Route::delete('/documents/{document}', [DocumentController::class, 'delete'])->middleware('auth');
