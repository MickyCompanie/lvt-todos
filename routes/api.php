<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TodoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::middleware('api')->group(function () {
//     Route::resource('todos', TodoController::class);
// });


// Public Routes
Route::get('todo/index', [TodoController::class, 'index'])->name('index');
Route::get('todo/show/{id}', [TodoController::class, 'show'])->name('show');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/login', [AuthController::class, 'login'])->name('login');



// Secured Routes
Route::middleware('auth:sanctum')->post('todo/store', [TodoController::class, 'store']);
Route::middleware('auth:sanctum')->put('todo/update/{id}', [TodoController::class, 'update'])->name('update');
Route::middleware('auth:sanctum')->post('/logout', [AuthController::class, 'logout'])->name('logout');



Route::delete('todo/delete/{id}', [TodoController::class, 'destroy'])->name('delete');
Route::get('todo/search/{title}', [TodoController::class, 'search'])->name('search');

Route::middleware('api')->group(function () {
    Route::resource('tags', TagController::class);
});