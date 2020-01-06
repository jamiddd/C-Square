<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.index');
});

Route::get('/apply', function () {
    return view('pages.apply');
});

Route::get('/career', function () {
    return view('pages.career');
});

Route::get('/courses', function () {
    return view('pages.courses');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/course/{course}', function ($course) {
    if ($course == "Web_Development"){
        $course_array = array("Web Development", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)", "../images/back.jpg"); 
        return view('pages.course')->with('course', $course_array);    
    } else if ($course == "Object_Oriented_Programming"){
        $course_array = array("Object Oriented Programming", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)", "../images/ang.jpg"); 
        return view('pages.course')->with('course', $course_array);
    } else if ($course == "Github_And_Version_Control"){
        $course_array = array("Github and Version Control", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)", "../images/pop.jpg"); 
        return view('pages.course')->with('course', $course_array);
    } else if ($course == "Android_Development"){
        $course_array = array("Android Development", "It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like)", "../images/app.jpg"); 
        return view('pages.course')->with('course', $course_array);
    } else {
        return view('pages.course')->with('course', $course);
    }
    
});

