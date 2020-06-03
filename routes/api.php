<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Student SignUp

// List Students
Route::get('students' , 'StudentLoginController@index');
// List Single Student
Route::get('student/{id}' , 'StudentLoginController@show');
// Create Student
Route::post('create/student' , 'StudentLoginController@store');
// update Student
Route::put('student' , 'StudentLoginController@store');
// Delete Student
Route::delete('student/{id}' , 'StudentLoginController@destroy');
// Student Login
Route::post('login' , 'StudentLoginController@checkloginstudent');
// Student logout
Route::get('/logout', 'StudentLoginController@logout');



// Route::post('auth' , 'StudentLoginController@auth');




// Doctor SignUp

// List Doctors
Route::get('doctors' , 'DoctorLoginController@index');
// List Single Doctor
Route::get('doctor/{id}' , 'DoctorLoginController@show');
// Create Doctor
Route::post('create/doctor' , 'DoctorLoginController@store');
// update Doctor
Route::put('doctor' , 'DoctorLoginController@store');
// Delete Doctor
Route::delete('doctor/{id}' , 'DoctorLoginController@destroy');
// Doctor Login
Route::post('logindoctor' , 'DoctorLoginController@checklogindoctor');
// Student Logout
Route::get('/logout', 'DoctorLoginController@logout');



// Post

// List Posts
Route::get('posts' , 'PostController@index');
// List Single Post
Route::get('post/{id}' , 'PostController@show');
// Create Post
Route::post('create/post' , 'PostController@store');
// update Post
Route::put('post' , 'PostController@store');
// Delete Post
Route::delete('post/{id}' , 'PostController@destroy');


// List Quizes
Route::get('quizes' , 'QuizController@index');
// List Single Post
Route::get('quiz/{id}' , 'QuizController@show');
// Create Post
Route::post('create/quiz' , 'QuizController@store');
// update Post
Route::put('quiz' , 'QuizController@store');
// Delete Post
Route::delete('quiz/{id}' , 'QuizController@destroy');

// list Courses
Route::get('courses' , 'CourseController@index');
// List Single course 
// Route::get('course/{id}' , 'CourseController@show');
// List Single Group Of Courses Using year_id
Route::get('course/{id}' , 'CourseController@yearid');
// Create course
Route::post('create/course' , 'CourseController@store');
// Delete course
Route::delete('course/{id}' , 'CourseController@destroy');

// List Lecture
Route::get('lecture' , 'LectureController@index');
// List Single Lecture
Route::get('/lecture/{id}', 'LectureController@show');
// Upload Lecture
Route::post('/fileupload', 'LectureController@store');
// Destroy Lecture
Route::delete('lecture/{id}' , 'LectureController@destroy');
// download Lecture
Route::get('/download', 'LectureController@downloadlec');
// ahmed ali
Route::post('/ahmedali', 'LectureController@ahmedali');



// Student Login
// Route::post('/checklogin', 'StudentLoginController@checklogin');
// Student logout
//Route::get('/logout', 'StudentLoginController@logout');

// Doctor Login
// Route::post('/checklogin', 'DoctorLoginController@checklogin');
// Doctor logout
//Route::get('/logout', 'DoctorLoginController@logout');


Route::post('/event', 'EventController@store');

















