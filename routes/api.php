<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\auth\registerController;
//use App\auth\loginController;
use App\Http\Controllers\api\auth\loginController;
use App\Http\Controllers\TableChartController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/register',[registerController::class,'register']);
Route::post('/login',[loginController::class,'login']);

Route::post('/tableChart',[TableChartController::class,'print']);