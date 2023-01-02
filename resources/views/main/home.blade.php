@php
    $title = 'Learnejo:Home';
    $image = asset('assets/image/home.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
    <style>
        #main-content {
            height: 100%;
            width: 100%;
            /* margin: 3rem; */
            display: flex;
            align-items: center;
            flex-direction: column;
            color: #4c4e61;
            /* background: #32c552; */
        }

        #main-content #header-1 {
            font-size: 28px;
            font-weight: 200;
        }

        #main-content #header-2 {
            font-size: 32px;
            font-weight: 600;
            margin: 15px 0 20px;

            /* border-bottom: 4px solid #32c552; */
        }

        #main-content #body {
            text-align: center;
            font-size: 14px;
            line-height: 1.4rem;
            color: rgba(76, 78, 97, 0.5);
            width: 30rem;
            padding-bottom: 40px;
        }

        #main-content #card-body {
            display: flex;
            align-items: center;
        }

        #main-content #card-body #card-1 {
            border-top: 3px solid #45d3d3;
        }

        #main-content #card-body #card-1:hover {
            background: linear-gradient(to bottom, rgba(69, 211, 211, 0.5), transparent);
            transform: scale(1.05);
            box-shadow: 0px 15px 15px 16px rgba(0, 0, 0, 0.1);
        }

        #main-content #card-body #card-2 {
            border-top: 3px solid #ea5353;
        }

        #main-content #card-body #card-2:hover {
            background: linear-gradient(to bottom, rgba(234, 83, 83, 0.4) 5%, transparent 90%);
            transform: scale(1.05);
            box-shadow: 0px 15px 15px 16px rgba(0, 0, 0, 0.1);
        }

        #main-content #card-body #card-3 {
            border-top: 3px solid #fcaf4a;
        }

        #main-content #card-body #card-3:hover {
            background: linear-gradient(to bottom, rgba(252, 175, 74, 0.5), transparent 85%);
            transform: scale(1.05);
            box-shadow: 0px 15px 15px 16px rgba(0, 0, 0, 0.1);
        }

        #main-content #card-body #card-4 {
            border-top: 3px solid #549ef2;
        }

        #main-content #card-body #card-4:hover {
            background: linear-gradient(to bottom, rgba(84, 158, 242, 0.5), transparent);
            transform: scale(1.05);
            box-shadow: 0px 15px 15px 16px rgba(0, 0, 0, 0.1);
        }

        #main-content #card-body .card {
            background: white;
            margin: 1rem 0.8rem;
            padding: 1rem;
            width: 20rem;
            border-radius: 8px;
            box-shadow: 0px 9px 20px 1px rgba(0, 0, 0, 0.1);
            transition: 0.5s all;
        }

        #main-content #card-body .card .card-title {
            font-weight: 600;
            margin-bottom: 15px;
            font-size: 1.6rem;
            color: #32c552;
        }

        #main-content #card-body .card .card-body {
            font-size: 16px;
            line-height: 1.2rem;
            color: #000000;
        }

        #main-content #card-body .card #card-cont {
            display: flex;
            justify-content: flex-end;
        }

        #main-content #card-body .card #card-cont .card-img {
            padding-top: 10px;
            width: 20%;
        }

        @media only screen and (max-width: 675px) {
            #main-content #card-body {
                display: inline-block;
            }
        }

        @media only screen and (max-width: 375px) {
            #main-content #header-2 {
                text-align: center;
                width: 22rem;
            }

            #main-content #body {
                width: 18rem;
            }

            #main-content #card-body {
                display: inline;
            }
        }
    </style>
@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'> <br> <br>
        <div id="hero" class="text-center container-fluid justify-content-center align-items-center">
            {{-- <img data-aos="fade-up" width="300" src="https://learnejo.com/assets/image/logo-dark.png" alt=""> --}}
            {{-- <br> --}}
            <h1 class="text-center"
                style="font-size-adjust: 60px; text-shadow: 2px 0 #fff, -2px 0 #fff, 0 2px #fff, 0 -2px #fff,
        1px 1px #fff, -1px -1px #fff, 1px -1px #fff, -1px 1px #fff;"
                data-aos="fade-up" data-aos-delay="400">
                Learn & <span style="color:#32c552;">E</span>nhance <span style="color:#32c552;">J</span>ob
                <br><span style="color:#32c552;">O</span>pportunity !
            </h1><br>
            <h2 class="text-center text-dark">
                We Help Candidates Sharpen Their Technical Skills and Pursue Job
                Opportunities. <br> All
                Technical Skills are
                Essential for a Company Placement.</h2><br>
            <a class="hvr-sweep-to-right   pt-2 pb-2 ps-5 pe-5  bg-white h5 hvr-icon-wobble-horizontal"
                style="font-weight:500; font-size:1.5rem;" href="#get-start">Get
                Start
                <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a> <br><br> <br>
            <small class="pb-2"><strong>Crack Top Companies</strong></small>
            <div class="client_logos border-top border-bottom">
                <img src="https://www.hackerrank.com/wp-content/uploads/2022/10/peloton_black.png" alt=""
                    style="width:91px"> <img
                    src="https://www.hackerrank.com/wp-content/uploads/2022/10/atlassian_black.png" alt=""
                    style="width:139px"> <img
                    src="https://www.hackerrank.com/wp-content/uploads/2022/10/bloomberg_black.png" alt=""
                    style="width:91px"> <img
                    src="https://www.hackerrank.com/wp-content/uploads/2022/10/vmware_black.png" alt=""
                    style="width:91px"> <img
                    src="https://www.hackerrank.com/wp-content/uploads/2022/10/stripe_black.png" alt=""
                    style="width:90px"> <img
                    src="https://www.hackerrank.com/wp-content/uploads/2022/10/goldmansachs_black.png" alt=""
                    style="width:121px"> <img
                    src="https://www.hackerrank.com/wp-content/uploads/2022/10/adobe_black.png" alt=""
                    style="width:89px"> <img
                    src="https://www.hackerrank.com/wp-content/uploads/2022/10/linkedin_black.png" alt=""
                    style="width:115px">
            </div>


        </div>
    </x-slot>
    <div>
        <div class="p-2">
        </div>
    </div>
    <div id="get-start">
        <div id="main-content">
            <div id="header-1"></div>
            <div id="header-2">Enhance Learning & Sharpen Skills </div>
            {{-- <div id="body">Our Artificial Intelligence powered tools use millions of project data points to ensure
                that your project is successful</div> --}}
            <div id="card-body">
                <div id="first-item" data-aos="fade-right" data-aos-delay="100">
                    <div class="card" id="card-1">
                        <div class="card-title">MCQs/Quizs</div>
                        <div class="card-body">Monitors activity to identify project roadblocks</div>
                        <a class="  mt-2 hvr-icon-wobble-horizontal" href="#">View Mcqs/Quizs
                            <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a>

                        <div id="card-cont">
                            <img class="card-img"
                                src="https://res.cloudinary.com/hardik-khandelwal/image/upload/v1585732999/icon-karma.svg" />
                        </div>
                    </div>
                </div>
                <div id="second-item" data-aos="fade-down" data-aos-delay="100">
                    <div class="card" id="card-2">
                        <div class="card-title">Mock-Test</div>
                        <div class="card-body">Scans our talent network to create the optimal team for your project
                        </div>
                        <a class="  mt-2 hvr-icon-wobble-horizontal" href="/Mock-Test">Try Mock-Test
                            <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a>

                        <div id="card-cont"><img class="card-img"
                                src="https://res.cloudinary.com/hardik-khandelwal/image/upload/v1585732999/icon-calculator.svg" />
                        </div>
                    </div>
                    <div class="card" id="card-3" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-title">AI Interview</div>
                        <div class="card-body">Regularly evaluates our talent to ensure quality</div>
                        <a class="  mt-2 hvr-icon-wobble-horizontal" href="#">Give Interview
                            <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a>

                        <div id="card-cont"><img class="card-img"
                                src="https://res.cloudinary.com/hardik-khandelwal/image/upload/v1585732999/icon-supervisor.svg" />
                        </div>
                    </div>
                </div>
                <div id="third-item">
                    <div class="card" id="card-4" data-aos="fade-left" data-aos-delay="100">
                        <div class="card-title">Courses/Solutions </div>
                        <div class="card-body">Uses data from past projects to provide better delivery estimates</div>
                        <a class="  mt-2 hvr-icon-wobble-horizontal" href="/Courses">Check Courses
                            <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a>

                        <div id="card-cont"><img class="card-img"
                                src="https://res.cloudinary.com/hardik-khandelwal/image/upload/v1585732999/icon-team-builder.svg" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6"></div>
    </div>

    </div>
    {{-- <section class="inner-page">
        <div class="container">
            <div class=" pb-3" style="border-left:10px solid #32c552" data-aos="fade-right" data-aos-delay="200">
                <div class="row">
                    <div class="col-md">
                        <div class="d-flex container-fluid justify-content-center align-items-center h-100">
                            <div class="text-center">
                                <h2 class="h1">Free Courses</h2>
                                <h4 class="h4">Get Paid Courses For <strong>Free</strong></h4>
                                <strong>Do Courses and skillup your self.</strong>
                                <img class="img-fluid"
                                    src="https://cdn-ddhbi.nitrocdn.com/oQUUkmjvDPdPLvhisuibbubwHakMrNcj/assets/static/optimized/rev-dfd9cc0/wp-content/uploads/2021/07/line.png"
                                    alt="">
                                <p class="text-center">
                                    <a class="hvr-sweep-to-right   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                                        href="/Courses">Check Courses
                                        <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <img width="300" class="img-fluid" src="{{ asset('assets/image/f-courses.png') }}"
                            alt="">


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-success p-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="h2">MCQ's</h2>
                    <p>Try Our Quik MCQs to improve competitive assessments.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="w-100 d-flex container-fluid justify-content-center align-items-center">
                        <a class="hvr-sweep-to-right   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                            href="#">
                            Try MCQs <i class="fa fa-arrow-right hvr-icon" aria-hidden="true">
                            </i>
                        </a>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <section class="inner-page">
        <div class="container">
            <div class=" pb-3" style="border-right:10px solid #32c552" data-aos="fade-left" data-aos-delay="300">
                <div class="row">
                    <div class="col-md text-center">
                        <img width="300" class="img-fluid" src="{{ asset('assets/image/f-job.png') }}"
                            alt="">


                    </div>
                    <div class="col-md">
                        <div class="d-flex container-fluid justify-content-center align-items-center h-100">
                            <div class="text-center">
                                <h2 class="h1">Jobs / Internships</h2>
                                <h4 class="h4">Get Jobs And Internships Update.</h4>
                                <strong>Naver Miss any opportunity, Update With Us.</strong>
                                <img class="img-fluid"
                                    src="https://cdn-ddhbi.nitrocdn.com/oQUUkmjvDPdPLvhisuibbubwHakMrNcj/assets/static/optimized/rev-dfd9cc0/wp-content/uploads/2021/07/line.png"
                                    alt="">
                                <p class="text-center">
                                    <a class="hvr-sweep-to-left   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                                        href="/Job-Internships"><i class="fa fa-arrow-left hvr-icon"
                                            aria-hidden="true">
                                        </i>
                                        Get Jobs Update
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <section class="bg-success p-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="h2">PDF's</h2>
                    <p>Downloads Useful PDFs to enhance your knowledge.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="w-100 d-flex container-fluid justify-content-center align-items-center">
                        <a class="hvr-sweep-to-right   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                            href="/Job-Internships">
                            Downloads PDF's <i class="fa fa-arrow-right hvr-icon" aria-hidden="true">
                            </i>
                        </a>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <section class="inner-page">
        <div class="container">
            <div class=" pb-3" style="border-left:10px solid #32c552" data-aos="fade-right" data-aos-delay="200">
                <div class="row">
                    <div class="col-md">
                        <div class="d-flex container-fluid justify-content-center align-items-center h-100">
                            <div class="text-center">
                                <h2 class="h1"> <span class="text-success">A</span><span
                                        class="text-info">I</span>
                                    Interview</h2>
                                <h4 class="h4">End-to-End AI Video Interview Platform</h4>
                                <strong>Practice for Interview with our AI Interviewer</strong>
                                <img class="img-fluid"
                                    src="https://cdn-ddhbi.nitrocdn.com/oQUUkmjvDPdPLvhisuibbubwHakMrNcj/assets/static/optimized/rev-dfd9cc0/wp-content/uploads/2021/07/line.png"
                                    alt="">
                                <p class="text-center">
                                    <a class="hvr-sweep-to-right   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                                        href="/Mock-Test">Try AI Interview
                                        <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md text-center">
                        <img width="300" class="img-fluid" src="{{ asset('assets/image/ai-inter.png') }}"
                            alt="">


                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-success p-3 text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="h2">Download Solutions</h2>
                    <p>Downloads Prevuse year assessments solutions and crack pdfs.</p>
                </div>
                <div class="col-md-4 text-center">
                    <div class="w-100 d-flex container-fluid justify-content-center align-items-center">
                        <a class="hvr-sweep-to-right   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                            href="/Job-Internships">
                            Downloads Solutions <i class="fa fa-arrow-right hvr-icon" aria-hidden="true">
                            </i>
                        </a>
                    </div>
                </div>
            </div>




        </div>
    </section>
    <section class="inner-page">
        <div class="container">
            <div class=" pb-3" style="border-right:10px solid #32c552" data-aos="fade-left" data-aos-delay="300">
                <div class="row">
                    <div class="col-md text-center">
                        <img width="300" class="img-fluid" src="{{ asset('assets/image/mock-test.png') }}"
                            alt="">


                    </div>
                    <div class="col-md">
                        <div class="d-flex container-fluid justify-content-center align-items-center h-100">
                            <div class="text-center">
                                <h2 class="h1">Mock Test</h2>
                                <h4 class="h4">End-to-End AI Video Interview Platform</h4>
                                <strong>Practice for Interview with our AI Interviewer</strong>
                                <img class="img-fluid"
                                    src="https://cdn-ddhbi.nitrocdn.com/oQUUkmjvDPdPLvhisuibbubwHakMrNcj/assets/static/optimized/rev-dfd9cc0/wp-content/uploads/2021/07/line.png"
                                    alt="">
                                <p class="text-center">
                                    <a class="hvr-sweep-to-left   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                                        href="/Mock-Test"><i class="fa fa-arrow-left hvr-icon" aria-hidden="true">
                                        </i>
                                        Try Mock Test
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section> --}}



    {{-- <section class="inner-page">
        <div class="container">
            <div class="section-title">
                <h2>Prepare For</h2>
                <p>Prepare For Your Dream Company.</p>
                <span>Prepare For</span>
            </div>
            <span class="h5 mb-5" style="border-bottom:5px solid lightgreen;"><b>Top IT Companies</b></span><br><br>
            <div class="row">
                @forelse ($getTMockTest as $mockTest)
                    <div class="col-md-3" data-aos="fade-up">
                        <a href="{{ url('/Prepare') }}/{{ $mockTest->prama_link }}">
                            <div style="height: 50px; overflow:hidden;"
                                class="hvr-grow-shadow rounded-8 shadow px-2  p-1 m-2 ">
                                <img width="40" class="rounded-circle" src="{{ $mockTest->image }}" alt="">
                                &nbsp;&nbsp; <span class="h5">{{ $mockTest->name }}</span>
                            </div>
                        </a>
                    </div>
                @empty
                    <h2>Please Contact Us <a href="{{ url('/Contact-Us') }}">Click</a></h2>
                @endforelse

            </div>

            <br>
            <span class="h5 mb-5" style="border-bottom:5px solid lightgreen;"><b> Non-Tech (Govt.)</b> </span><br><br>
            <div class="row">
                @forelse ($getNTMockTest as $mockTest)
                    <div class="col-md-3" data-aos="fade-up">
                        <a href="{{ url('/Prepare') }}/{{ $mockTest->prama_link }}">
                            <div style="height: 50px; overflow:hidden;" class="zoom rounded-8 shadow  px-2  p-1 m-2">
                                <img width="40" class="rounded-circle" src="{{ $mockTest->image }}" alt="">
                                &nbsp;&nbsp; <span class="h5">{{ $mockTest->name }}</span>
                            </div>
                        </a>
                    </div>
                @empty
                    <h2>Please Contact Us <a href="{{ url('/Contact-Us') }}">Click</a></h2>
                @endforelse
            </div>
        </div>
    </section> --}}
    {{-- 
    <section class="inner-page">
        <div class="container">
            <div class="section-title">
                <h2>Free Courses</h2>
                <p>To Improve Your <b>Resume</b>.</p>
                <span>Free Courses</span>
            </div>
            <section class="trending-courses">
                <div class="row ms-2 me-2">
                    @forelse ($getCourses as $course)
                        <div class="item col-xl-3 col-lg-6 col-12 " data-aos="zoom-in" data-aos-delay="30">
                            <div data-tiltx class="course-tile mb-4 border zoom ">
                                <a href="/Courses/{{ $course->prama_link }}" target="_blank"
                                    class="trending-course-link" data-course-title="{{ $course->title }}">
                                    <div data-tiltx class="course-featured-image img-div">
                                        <p class="top-right bg-primary p-1">{{ $course->type }}</p>
                                        <p class="bottom-left" style="font-size:12px;"> {{ $course->catg }}</p>
                                        <p class="bottom-right"><span class="bg-danger p-1">Free</span>
                                        </p>
                                        <img src="{{ $course->image }}" class="img-fluid blur-up lazyloaded">
                                    </div>
                                    <article class="course-info" style="height:200px;">
                                        <h2 class="color-4a m-0"><b>{{ $course->title }}</b></h2>

                                        <div class="p-2">
                                            <div class="row">
                                                <div class="col">
                                                    <i class="fa fa-eye"></i> {{ $course->view }}
                                                </div>
                                                <div class="col">
                                                    <i class="fa fa-user-plus"></i> {{ $course->enroll }}
                                                </div>
                                            </div>
                                        </div>
                                        <small class="text-justify"
                                            style="font-size: 12px;">{{ $course->sort_desc }}</small>
                                       
                                    </article>
                                </a>
                            </div>
                        </div>
                    @empty
                        <h2>Courses Not Found! Please Contact Us <a href="{{ url('/Contact-Us') }}">Click</a></h2>
                    @endforelse

                </div>

                <p class="text-end"><a class="btn btn-md btn-success hvr-icon-wobble-horizontal"
                        href="{{ url('/Courses') }}">More Courses
                        <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a></p>

            </section>
        </div>

    </section> --}}
    {{-- <div class="row">
        <div class="col-md-6">
            <section class="inner-page">
                <div class="container">
                    <div class="section-title">
                        <h2>Top Rankers</h2>
                        <span>Top Rankers</span>
                    </div>
                    @forelse ($ranker as $ranker)
                        <div class=" rounded-8 shadow z-depth-3 zoom p-2 m-2" data-aos="zoom-in" data-aos-delay="30">
                            <div class="row">
                                <div class="col-8">
                                    <img width="50" class="rounded-circle border border-success"
                                        src="{{ $ranker->profile_image }}" alt=""> &nbsp;
                                    {{ $ranker->student_name }}
                                </div>
                                <div class="col-4 text-center border-start">Point
                                    <br>{{ $ranker->points }}
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </section>
        </div>

        <div class="col-md-6">
            <section class="inner-page">
                <div class="container">
                    <div class="section-title">
                        <h2>Job Updates</h2>
                        <span>JOb Updates</span>
                    </div>
                    @forelse ($getCJobs as $job)
                        <div class="p-1 border-bottom">
                            <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                                <div class="row">
                                    <div class="col-2">
                                        <img width="50" src="{{ $job->image }}" alt="">
                                    </div>
                                    <div class="col-10 pt-2">{{ $job->title }}</div>
                                </div>
                            </a>

                        </div>
                    @empty
                        <p>Jobs Not Found! <a href="{{ url('/Contact-Us') }}">Click To Contact Us</a></p>
                    @endforelse
                    @forelse ($getGJobs as $job)
                        <div class="p-1 border-bottom">
                            <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                                <div class="row">
                                    <div class="col-2">
                                        <img width="70" src="{{ $job->image }}" alt="">
                                    </div>
                                    <div class="col-10 pt-2">{{ $job->title }}</div>
                                </div>
                            </a>

                        </div>
                    @empty
                        <p>Jobs Not Found! <a href="{{ url('/Contact-Us') }}">Click To Contact Us</a></p>
                    @endforelse
                    <p class="text-end"><a class="btn btn-md btn-success hvr-icon-wobble-horizontal"
                            href="{{ url('/Job-Internships') }}">More
                            Jobs
                            <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a></p>
                </div>
            </section>
        </div>
    </div> --}}

</x-layout.main.base>
