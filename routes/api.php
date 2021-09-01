<?php

use App\Http\Controllers\api\blogController;
use App\Http\Controllers\AuthController;
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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
//public route
Route::get('blogs', [blogController::class, 'index']);
Route::get('blogs/{blog}', [blogController::class, 'show']);
Route::get('blogs/search/{title}', [blogController::class, 'search']);
//Route::resource('blogs', blogController::class);
//search 
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::group(['middleware' => ['auth:sanctum']],function(){
    Route::post('blogs', [blogController::class, 'store']);
    Route::put('blogs/{blog}', [blogController::class, 'update']);
    Route::delete('blogs/{blog}', [blogController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});




