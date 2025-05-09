<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
// use App\Http\Controllers\UserController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ClassRoomController;

use App\Http\Controllers\loginController;

// Route::get('hello', function () {
//     return 'hello';
// });
// // ,

// Route::get('/', function () {
//     return view('welcome');
// });

// // Route::get('/about', function () {
// //     return view('about');
 
// // });simple route without paramenters 

// // route with parameters 
// Route::get('/about/{name}', function ($name) {
//     // echo $name;// can also do like that 
//     return view('about',['name'=>$name]);
// });

// Route::get('/user/{id}', function ($id) {
//     return "User ID: " . $id;
// });
// Route::get('/show-task-form', [TaskController::class, 'showTaskForm']);

// Route::get('/save-task', [TaskController::class, 'saveTask']);
// // function p($data)
// // {
// //     echo "<pre>";
// //     print_r($data);
// //     die();
// // }
 
// Route::get('user', [UserController::class, 'getUser']);

 

// // Route::get('/register', [StudentController::class, 'showForm']);
// // Route::post('/saveform', [StudentController::class, 'saveStudent']);

 
// Route::get('/book', [BookController::class, 'showbooks']);
// Route::post('/savebooks', [BookController::class, 'saveBook']);

 
 
// Route::get('/school-form', [SchoolController::class, 'create']);
// Route::post('/save-school', [SchoolController::class, 'store']);
// Route::get('/schools', [SchoolController::class, 'show']); // to fetch and display schools


// Route::get('school/edit/{id}', [SchoolController::class, 'edit']);


// Route::delete('school/delete/{id}', [SchoolController::class, 'destroy']);
// Route::put('school/update/{id}', [SchoolController::class, 'update']);  // Update action


 

// // Show form
// // Show form to create a class
// Route::get('class-create', [ClassRoomController::class, 'create'])->name('class.create');

// // Store class
// Route::post('class-store', [ClassRoomController::class, 'store'])->name('class.store');

// // Show all classes
// Route::get('class-list', [ClassRoomController::class, 'index'])->name('class.index');

// // Edit form
// Route::get('class/edit/{id}', [ClassRoomController::class, 'edit'])->name('class.edit');

// // Update class
// Route::put('class/update/{id}', [ClassRoomController::class, 'update'])->name('class.update');

// // Delete class
// Route::delete('/class/delete/{id}', [ClassRoomController::class, 'destroy'])->name('class.destroy');



// Route::get('/student/create/{classId}', [StudentController::class, 'create'])->name('student.create');
// Route::post('/student/store', [StudentController::class, 'store'])->name('student.save');

// // Route to display the list of students
// Route::get('students', [StudentController::class, 'index'])->name('student.index');

// // Route to show the form to create a new student
// Route::get('/student/create', [StudentController::class, 'showForm']);

// // Route to save a new student
// Route::post('/student/save', [StudentController::class, 'saveStudent']);

// // Route to show the edit form for a student
// Route::get('/student/edit/{id}', [StudentController::class, 'edit']);

// // Route to update student details
// Route::put('/student/update/{id}', [StudentController::class, 'update']);

// // Route to delete a student
// Route::delete('/student/delete/{id}', [StudentController::class, 'destroy']);


Route::get('/user/add', [loginController::class, 'showUserLogin']);
function p($data)
{
    echo "<pre>";
    print_r($data);
    die();
}

Route::post('/user/save', [loginController::class, 'store']) ;
// Route::get('/user/login', [loginController::class, 'login']);
// Route::get('/user/login', function () {
//     return view('login');
// });
