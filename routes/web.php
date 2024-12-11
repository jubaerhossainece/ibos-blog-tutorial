<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/profile', function(){
//     return view('show');
// });

// route::get('api/users', function(){
//     $user = User::get();
//     return response([
//         'name' => 'sayed',
//         'address' => 'kadjsfaksd',
//         'phone' => '0917243456356'
//     ]);
// });


Route::get('api/users', [UserController::class, 'index']);


// Route


// include('profile/show.php');

// Route::get('api/price-rules',)
