<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::apiResource('books', BookController::class);
Route::apiResource('categories', CategoryController::class);
Route::get('/categories/{category}/books', [CategoryController::class, 'booksOfCategory']);
Route::apiResource('/books/{bookid}/readers', BookController::class);
Route::get('/authors/{book}/books', [AuthorController::class, 'booksOfAuthors']);