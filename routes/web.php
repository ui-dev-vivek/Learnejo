<?php

use App\Http\Controllers\Admin\Adminauth;
use App\Http\Controllers\Admin\Adminblogs;
use App\Http\Controllers\Admin\Admincourses;
use App\Http\Controllers\Admin\Admindashboard;
use App\Http\Controllers\Admin\Adminimage;
use App\Http\Controllers\Admin\Adminjobs;
use App\Http\Controllers\Admin\Adminmocktest;
use App\Http\Controllers\Admin\Adminpages;
use App\Http\Controllers\Admin\User;
use App\Http\Controllers\Admin\Whatsapp;
use App\Http\Controllers\Examination\Exam;
use App\Http\Controllers\Examination\Examination;
use App\Http\Controllers\Examination\Examinationaction;
use App\Http\Controllers\Examination\Examinationauth;
use App\Http\Controllers\Examination\Login;
use App\Http\Controllers\Google;
use App\Http\Controllers\Main\Blog;
use App\Http\Controllers\Main\Blogs;
use App\Http\Controllers\Main\Mocktest;
use App\Http\Controllers\Main\Courses;
use App\Http\Controllers\Main\Home;
use App\Http\Controllers\Main\Jobs;
use App\Http\Controllers\Main\Mcqs;
use App\Http\Controllers\Main\Pages;
use App\Http\Controllers\main\Quiz;
use App\Http\Controllers\Payment\Rozorpay;
use App\Http\Controllers\Pdf\Pdf;
use App\Http\Controllers\Social\GoogleController;
use App\Http\Controllers\Student\Studentauth;
use App\Http\Controllers\Student\Stusidedashboard;
use App\Http\Controllers\Whatsapplogin;
use Illuminate\Support\Facades\Route;


//Main
Route::get('/', [Home::class, 'Index']);
Route::view('/About-Us', 'main.about');
Route::view('/Pricing', 'main.pricing');
Route::view('/Get-Start', 'main.getstart');
Route::view('/Term-and-Conditions', 'main.terms_conditions');
Route::view('/Privacy-Policy', 'main.privacy_policy');
Route::view('/Refund-Cancellations', 'main.refunds_cancellations');
Route::view('/Contact-Us', 'main.contact');
Route::view('/Login', 'main.login');
Route::get('/Join-Us-With-Whatsapp', [Home::class, 'whatsappJoin']);
Route::post('/Join-Whatsapp', [Home::class, 'joinWhatsapp']);
Route::post('/Submit-Contact-Us', [Home::class, 'contactUs']);
Route::get('/Pages/{pramaLink}', [Pages::class, 'pages']);
Route::get('/Share-Courses-whatsapp', [Courses::class, 'shareCoursesnow']);
Route::post('/Share-Jobs-whatsapp', [Jobs::class, 'shareJobsnow']);


//Main Courses
Route::get('/Courses', [Courses::class, 'index']);
Route::get('/Courses/{pramaLink}', [Courses::class, 'view']);
Route::get('Courses/Card/{pramaLink}', [Courses::class, 'card']);
Route::get('/Courses/Category/{catg}', [Courses::class, 'byCatg']);
Route::post('/Enroll', [Courses::class, 'enroll']);
Route::post('/send-data-to-offorbystudents', [Courses::class, 'sendData']);

// Quiz
Route::get('/Quiz/{pramaLink}', [Quiz::class, 'index']);

// Mcqs
Route::get('Mcqs', [Mcqs::class, 'index']);
Route::get('Mcqs/{pramaLink}', [Mcqs::class, 'subView']);
Route::get('Mcqs/{subPramaLink}/{pramaLink}', [Mcqs::class, 'view']);


// Main Jobs
Route::get('/Job-Internships', [Jobs::class, 'index']);
Route::get('/Job-Internships/{pramaLink}', [Jobs::class, 'view']);
Route::post('/Apply', [Jobs::class, 'apply']);
Route::get('Job-Internships/Card/{pramaLink}', [Jobs::class, 'card']);

// Main Mock Test
Route::get('/Prepare/{pramalink}', [Mocktest::class, 'mockTestAbout']);
// Mock-Test
Route::get('Mock-Test', [MockTest::class, 'index']);


// Admin Login
Route::get('/Admin-Login', [Adminauth::class, 'adminLogin']);
Route::post('/Admin-Login', [Adminauth::class, 'postAdminLogin']);

// Student Login
Route::get('/Student-Login', [Studentauth::class, 'studentLogin']);
Route::post('/Student-Login', [Studentauth::class, 'postStudentLogin']);


Route::group(['middleware' => ['StudentLogin']], function () {
    // Route::get('/Courses/{pramaLink}', [Courses::class, 'view']);
    // Route::get('/Job-Internships/{pramaLink}', [Jobs::class, 'view']);

    // MockTest
    Route::get('Mock-Test/{pramaLink}', [MockTest::class, 'subView']);
    Route::get('Mock-Test/{subPramaLink}/{pramaLink}', [MockTest::class, 'view']);

    Route::get('Mock-Test/{subPramaLink}/{pramaLink}/{testId}', [MockTest::class, 'start']);
    // pdf
    Route::get('/PDF', [Pdf::class, 'index']);
    Route::get('/PDF/Payment/{id}/{status}', [Pdf::class, 'view']);
});



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
    // Students:
    Route::get('Admin/Users', [User::class, 'index']);
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

    //Blogs
    Route::get('/Admin/Blog', [Adminblogs::class, 'index']);
    Route::get('/Admin/Add-Blog', [Adminblogs::class, 'addBlog']);
    Route::post('/Admin/Add-Blog', [Adminblogs::class, 'postAddBlog']);
    Route::get('/Admin/Edit-Blog/{pramaLink}', [Adminblogs::class, 'editBlog']);


    //Whatsapp Groups
    Route::post('/Admin/changeGroupStatus/', [Whatsapp::class, 'changeGroupStatus']);
    Route::post('/Admin/updateMembers/',  [Whatsapp::class, 'updateMembers']);
    Route::get('/Admin/Whatsapp',  [Whatsapp::class, 'whatsapp']);
    Route::post('/Admin/Add-Whatsapp-Group', [Whatsapp::class, 'addWhatsappGroup']);
    Route::get('/Admin/Send-Courses', [Whatsapp::class, 'shareCourses']);
    // Image

    Route::get('/Admin/Image', [Adminimage::class, 'index']);
    Route::post('image-upload', [Adminimage::class, 'store'])->name('image.store');
});


// Google Login
Route::controller(GoogleController::class)->group(function () {
    Route::get('auth/google', 'redirectToGoogle')->name('auth.google');
    Route::get('auth/google/callback', 'handleGoogleCallback');
});
Route::post('/Is-Login', [Google::class, 'isLogin']);

Route::get('/Student-Side-Dashboard', [Stusidedashboard::class, 'index']);

// Examination 
Route::view('/Examination-Login', 'examination.login');
Route::post('/Examination-Login', [Examinationauth::class, 'login']);

Route::group(['middleware' => ['StudentLogin']], function () {
    Route::get('/Examination-Rules/{pramaLink}/{subPramaLink}', [Examinationaction::class, 'rules']);
    Route::get('/Start-Examination/{pramaLink}/{subPramaLink}', [Examinationaction::class, 'start']);
    Route::get('/Examination/{pramaLink}/{subPramaLink}/{isCamara}', [Examination::class, 'index']);
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

// Paymet
Route::get("/Check-Out", [Rozorpay::class, 'checkOut']);

Route::get('auth/google', [Google::class, 'redirectToGoogle']);
Route::get('callback', [Google::class, 'handleCallback']);
Route::get('Logout', [Google::class, 'logout']);







// Blogs
Route::get('/Blogs', [Blogs::class, 'index']);
Route::get('/Blogs/{pramaLink}', [Blogs::class, 'view']);
Route::post('Add-Blog-Comment', [Blogs::class, 'addBlogComment']);