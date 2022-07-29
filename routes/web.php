<?php

use App\Http\Controllers\Main\Courses;
use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Main\Jobs;
use Illuminate\Support\Facades\Route;


Route::get('/', [Home::class, 'Index']);
Route::view('/About-Us', 'main.about');
Route::view('Term-and-Conditions', 'main.terms_conditions');
Route::view('/Privacy-Policy', 'main.privacy_policy');
Route::view('/Refund-Cancellations', 'main.refunds_cancellations');
Route::view('/Contact-Us', 'main.contact');
Route::post('/Submit-Contact-Us', [Home::class, 'contactUs']);

Route::get('/Courses', [Courses::class, 'index']);
Route::get('/Courses/{pramaLink}', [Courses::class, 'view']);
Route::post('/Enroll', [Courses::class, 'enroll']);


// Main Jobs
Route::get('/Job-Internships', [Jobs::class, 'index']);
Route::get('/Job-Internships/{pramaLink}', [Jobs::class, 'view']);
Route::post('/Apply', [Jobs::class, 'apply']);