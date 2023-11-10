<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\AuthController;

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
Route::get('/students',[StudentController::class, 'index'])->middleware('auth:sanctum');
Route::get('/animals',[AnimalController::class, 'index']);
Route::post('/students',[StudentController::class, 'store']);
Route::post('/animals',[AnimalController::class, 'store']);
Route::put('/animals/{id}',[AnimalController::class, 'update']);
Route::put('/students/{id}',[StudentController::class, 'update']);
Route::delete('/animals/{id}',[AnimalController::class, 'destroy']);
Route::delete('/students/{id}',[StudentController::class, 'destroy']);
Route::get('/students/{id}',[StudentController::class, 'show']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
