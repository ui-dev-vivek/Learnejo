<?php

use App\Http\Controllers\Admin\Adminauth;
use App\Http\Controllers\Admin\Admincourses;
use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Adminjobs;
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

// Admin Login
Route::get('/Admin-Login', [Adminauth::class, 'adminLogin']);
Route::post('/Admin-Login', [Adminauth::class, 'postAdminLogin']);

// Cron Job Urls
Route::get('/Admin/Load-Courses', [Admincourses::class, 'loadCourses']);
Route::get('/Admin/Load-Jobs', [Adminjobs::class, 'loadJobs']);


//Admin
Route::group(['middleware' => ['AdminLogin']], function () {
    // DashBoard
    Route::get('/Admin', [Admindashboard::class, 'dashboard']);
    Route::post('Admin/Delete-Item', [Admindashboard::class, 'deleteItem']);

    // Courses
    Route::get('/Admin/Courses', [Admincourses::class, 'courses']);
    Route::post('/Admin/updateCourses', [Admincourses::class, 'updateCourses']);

    // Jobs
    Route::get('/Admin/Jobs', [Adminjobs::class, 'jobsView']);
    Route::post('/Admin/Update-Jobs', [Adminjobs::class, 'updateJobs']);
});