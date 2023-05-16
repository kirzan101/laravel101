<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Http\Request;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::resource('/posts', PostController::class, ['except' => ['create', 'edit']]);
Route::resource('/comments', CommentController::class, ['except' => ['create', 'edit']]);
Route::resource('/suppliers', SupplierController::class, ['except' => ['create', 'edit']]);
Route::resource('/employees', EmployeeController::class, ['except' => ['create', 'edit']]);
