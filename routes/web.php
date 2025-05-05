<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/about', function () {
//     return view('about');
 
// });simple route without paramenters 

// route with parameters 
Route::get('/about/{name}', function ($name) {
    // echo $name;// can also do like that 
    return view('about',['name'=>$name]);
});

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});
Route::get('/show-task-form', [TaskController::class, 'showTaskForm']);

Route::get('/save-task', [TaskController::class, 'saveTask']);
// function p($data)
// {
//     echo "<pre>";
//     print_r($data);
//     die();
// }
 
Route::get('user', [UserController::class, 'getUser']);

 

Route::get('/register', [StudentController::class, 'showForm']);
Route::post('/saveform', [StudentController::class, 'saveStudent']);

 
Route::get('/book', [BookController::class, 'showbooks']);
Route::post('/savebooks', [BookController::class, 'saveBook']);

 
