<?php

use App\Modules\User\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//   return $request->user();
// });

Route::prefix('user')->group(function(){
  Route::post('create', [UserController::class, 'create']);
  Route::patch('update/{id}', [UserController::class, 'update']);
  Route::delete('delete/{id}', [UserController::class, 'delete']);
  Route::get('{id}', [UserController::class, 'findById']);
});
