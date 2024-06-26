<?php

use App\Http\Controllers\Api\PageController;
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

Route::get('/restaurants', [PageController::class, 'index']);
Route::get('/types', [PageController::class, 'getTypes']);

Route::get('/restaurant-by-slug/{slug}', [PageController::class, 'getRestaurantBySlug']);

Route::get('/get-client-token', [PageController::class, 'getClientToken']);
Route::post('/payment-request', [PageController::class, 'paymentRequest']);

Route::post('/send-order', [PageController::class, 'store']);
