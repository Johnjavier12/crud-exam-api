<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;

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


Route::get('/products',[ProductsController::class,'getProducts']);
Route::get('/products/{id}',[ProductsController::class,'getProductsByID']);
Route::post('/products',[ProductsController::class,'storeProducts']);
Route::put('/products/{id}',[ProductsController::class,'updateProducts']);
Route::delete('/products/{id}',[ProductsController::class,'deleteProduct']);   
