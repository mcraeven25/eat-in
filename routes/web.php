<?php

use App\Models\Recipe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RecipeController;

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

Route::get('/', [RecipeController::class, 'index']);

Route::get('/recipe/create', [RecipeController::class, 'create'])->middleware('auth');

Route::post('/recipe', [RecipeController::class, 'store'])->middleware('auth');

Route::get('/recipe/{recipe}/edit', [RecipeController::class, 'edit'])->middleware('auth');

Route::put('/recipe/{recipe}', [RecipeController::class, 'update'])->middleware('auth');

Route::delete('/recipe/{recipe}', [RecipeController::class, 'destroy'])->middleware('auth');

Route::get('/recipe/{recipe}', [RecipeController::class, 'show']);

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/register', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::get('/login', [UserController::class, 'login'])->name("login");

Route::post('/authenticate', [UserController::class, 'authenticate']);

Route::get('/recipes', [RecipeController::class, 'retrieve'])->middleware('auth');

Route::get('/user-recipe', [RecipeController::class, 'userRecipe']);
