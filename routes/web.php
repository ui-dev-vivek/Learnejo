<?php

use App\Http\Controllers\Admin\Adminauth;
use App\Http\Controllers\Admin\Admincourses;
use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Adminjobs;
use App\Http\Controllers\Admin\Adminmocktest;
use App\Http\Controllers\Admin\Adminpages;
use App\Http\Controllers\Admin\Whatsapp;
use App\Http\Controllers\Examination\Examinationaction;
use App\Http\Controllers\Examination\Examinationauth;
use App\Http\Controllers\Examination\Login;
use App\Http\Controllers\Main\Mocktest;
use App\Http\Controllers\Main\Courses;
use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Main\Jobs;
use App\Http\Controllers\Main\Pages;
use App\Http\Controllers\Social\GoogleController;
use App\Http\Controllers\Student\Studentauth;
use App\Http\Controllers\Student\Stusidedashboard;
use App\Http\Controllers\Whatsapplogin;
use Illuminate\Support\Facades\Route;


//Main
Route::get('/', [Home::class, 'Index']);
Route::view('/About-Us', 'main.about');
Route::view('/Term-and-Conditions', 'main.terms_conditions');
Route::view('/Privacy-Policy', 'main.privacy_policy');
Route::view('/Refund-Cancellations', 'main.refunds_cancellations');
Route::view('/Contact-Us', 'main.contact');
Route::get('/Join-Us-With-Whatsapp', [Home::class, 'whatsappJoin']);
Route::post('/Join-Whatsapp', [Home::class, 'joinWhatsapp']);
Route::post('/Submit-Contact-Us', [Home::class, 'contactUs']);
Route::get('/Pages/{pramaLink}', [Pages::class, 'pages']);


//Main Courses
Route::get('/Courses', [Courses::class, 'index']);
Route::get('/Courses/{pramaLink}', [Courses::class, 'view']);
Route::get('Courses/Card/{pramaLink}', [Courses::class, 'card']);
Route::get('/Courses/Category/{catg}', [Courses::class, 'byCatg']);
Route::post('/Enroll', [Courses::class, 'enroll']);
Route::post('/send-data-to-offorbystudents', [Courses::class, 'sendData']);

// Main Jobs
Route::get('/Job-Internships', [Jobs::class, 'index']);
Route::get('/Job-Internships/{pramaLink}', [Jobs::class, 'view']);
Route::post('/Apply', [Jobs::class, 'apply']);
Route::get('Job-Internships/Card/{pramaLink}', [Jobs::class, 'card']);

// Main Mock Test
Route::get('/Prepare/{pramalink}', [Mocktest::class, 'mockTestAbout']);
// Mock-Test
Route::get('Mock-Test', [MockTest::class, 'index']);
Route::get('Mock-Test/{pramaLink}', [MockTest::class, 'subView']);
Route::get('Mock-Test/{subPramaLink}/{pramaLink}', [MockTest::class, 'view']);

Route::get('Mock-Test/{subPramaLink}/{pramaLink}/{testId}', [MockTest::class, 'start']);


// Admin Login
Route::get('/Admin-Login', [Adminauth::class, 'adminLogin']);
Route::post('/Admin-Login', [Adminauth::class, 'postAdminLogin']);

// Student Login
Route::get('/Student-Login', [Studentauth::class, 'studentLogin']);
Route::post('/Student-Login', [Studentauth::class, 'postStudentLogin']);




// Cron Job Urls
Route::get('/Admin/Load-Courses', [Admincourses::class, 'loadCourses']);
Route::get('/Admin/Load-Jobs', [Adminjobs::class, 'loadJobs']);
Route::post('/Post-Jobs', [Adminjobs::class, 'loadJobs']);
Route::get('/Admin/updateCourses/{pramaLink}', [Admincourses::class, 'getupdateCourses']);
Route::post('/Post-Coursesx', [Admincourses::class, 'postCourses']);

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

    // Mock Test
    Route::get('/Admin/Mock-Test', [Adminmocktest::class, 'index']);
    Route::get('/Admin/About-Mock-Test/{pramaLink}', [Adminmocktest::class, 'addAboutMocktest']);
    Route::post('/Admin/About-Mock-Test', [Adminmocktest::class, 'postAddAboutMocktest']);
    Route::post('/Admin/Update-Mock-Test', [Adminmocktest::class, 'updateMockTest']);
    Route::get('/Admin/Add-Mock-Test', [Adminmocktest::class, 'addMockTest']);
    Route::post('/Admin/Add-Mock-Test', [Adminmocktest::class, 'postAddMockTest']);
    Route::post('/Admin/Add-Mock-Test-Sub-Topic', [Adminmocktest::class, 'addMockTestSubTopic']);
    Route::post('/Admin/Get-Sub-Topic', [Adminmocktest::class, 'getSubTopic']);
    Route::post('/Admin/Add-Mock-Test-Heading', [Adminmocktest::class, 'addMockTestHeading']);

    //Pages
    Route::get('/Admin/Pages', [Adminpages::class, 'index']);
    Route::get('/Admin/Add-Pages', [Adminpages::class, 'addPages']);
    Route::post('/Admin/Add-Pages', [Adminpages::class, 'postAddPages']);
    Route::get('/Admin/Edit-Pages/{pramaLink}', [Adminpages::class, 'editPages']);

    //Whatsapp Groups
    Route::post('/Admin/changeGroupStatus/', [Whatsapp::class, 'changeGroupStatus']);
    Route::post('/Admin/updateMembers/',  [Whatsapp::class, 'updateMembers']);
    Route::get('/Admin/Whatsapp',  [Whatsapp::class, 'whatsapp']);
    Route::post('/Admin/Add-Whatsapp-Group', [Whatsapp::class, 'addWhatsappGroup']);
    Route::get('/Admin/Send-Courses', [Whatsapp::class, 'shareCourses']);
});


// Google Login
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});

Route::get('/Student-Side-Dashboard', [Stusidedashboard::class, 'index']);

// Examination 
Route::view('/Examination-Login', 'examination.login');
Route::post('/Examination-Login', [Examinationauth::class, 'login']);

Route::group(['middleware' => ['StudentLogin']], function () {
    Route::get('/Examination-Rules/{pramaLink}/{subPramaLink}', [Examinationaction::class, 'rules']);
    Route::get('/Start-Examination/{pramaLink}/{subPramaLink}', [Examinationaction::class, 'start']);
    Route::view('/Examination/{pramaLink}/{subPramaLink}', 'examination.exam');
});


//Google Traking Urls
Route::view('/ads.txt', 'main.ads');
Route::get('/sitemap.xml', [Home::class, 'siteMap']);

// Whatsapp Login
Route::post('/Whatsapp-set-token', [Whatsapplogin::class, 'setToken']);
Route::post('/Whatsapp-auth-token', [Whatsapplogin::class, 'authToken']);
Route::post('/Whatsapp-update-auth', [Whatsapplogin::class, 'updateAuth']);
// Share On Whatsapp:
Route::get('/Share-Courses-on-whatsapp', [Whatsapplogin::class, 'shareCourse']);