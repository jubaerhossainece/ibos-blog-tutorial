<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
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

Route::get('/posts', function(){
    return 'hello';
});

Route::get('/posts', [PostController::class, 'index']);
Route::post('/posts', [PostController::class, 'store'])->middleware('api');
Route::resource('/comments', CommentController::class);
// Route::get('/comments', [CommentController::class, 'index']);
// Route::post('/comments', [CommentController::class, 'store']);
// Route::get('/comments/{comment}', [CommentController::class, 'show']);
// Route::patch('/comments/{comment}', [CommentController::class, 'update']);
// Route::delete('/comments/{comment}', [CommentController::class, 'destroy']);
