<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\PassportAuthController;
use App\Http\Controllers\TagController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the Rou,teServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('jwt.auth')->group(function(){

        
    Route::post('/tags',[TagController::class,'create']);
    Route::post('/tags',[TagController::class,'index']);
    Route::post('/tags',[TagController::class,'show']);
    
Route::post('/tasks', [TaskController::class, 'store']);

// Read alll
Route::get('/tasks', [TaskController::class, 'index']);

// Get one employee

Route::get('/tasks/{id}', [TaskController::class,'show']);

// Edit an employee

Route::put('/tasks/{id}', [TaskController::class,'update']);

// Delete an employee

Route::delete('/tasks/{id}',[TaskController::class,'delete']);
});

Route::get('/hello', function(){
    return "Hello World";
});

Route::get('/goodbye/{name}', function($name){
    return "Goodbye ".$name;
});

Route::post('/info', function(Request $request){
    return "Your name is ".$request["name"]." your age is ".$request["age"]." years old.";
});


// Create


Route::post('/register', [PassportAuthController::class, 'register']);
Route::post('/login', [PassportAuthController::class, 'login']);
