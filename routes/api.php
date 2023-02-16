<?php
use App\Http\Controllers\ApiController;
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
// Route::post('auth', [AdminController::class, 'auth_api']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/category', [ApiController::class, 'category']);
Route::get('/singlecategorydata/{limit}', [ApiController::class, 'singlecategorydata']);
Route::get('/singleblogdata', [ApiController::class, 'singleblogdata']);
Route::get('/search/{query}', [ApiController::class, 'querysearch']);
