<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// studentsのCRUDのルーティング
Route::get('/students', 'App\Http\Controllers\StudentController@index');
Route::post('/students', 'App\Http\Controllers\StudentController@store');
Route::get('/students/{student:id}', 'App\Http\Controllers\StudentController@edit');
Route::patch('/students/{student:id}', 'App\Http\Controllers\StudentController@update');
Route::delete('/students/{student:id}', 'App\Http\Controllers\StudentController@delete');
