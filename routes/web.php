<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function (){
    return view('test', ['variable' => "my variable text value"]);
});

Route::get('/comments', [CommentController::class, 'index']);
Route::get('/comments/create', [CommentController::class, 'create']);
Route::post('/comments/store', [CommentController::class, 'store']);
Route::post('/comments/delete', [CommentController::class, 'delete']);