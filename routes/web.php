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

Route::get('/contacts', function () {
    return view('pages.contacts');
});

Route::get('/courses', function () {
    return view('pages.courses');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/course/{course}', function ($course) {
    return view('pages.course')->with('course', $course);
});

