@php
    $title = 'Learnejo:Home';
    $image = asset('assets/image/home.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
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
                href="#main">Get
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
    <section class="inner-page">
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
                                <p class="text-start">
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
                                <p class="text-end">
                                    <a class="hvr-sweep-to-left   pt-2 pb-2 ps-3 pe-3  bg-white border border=success h6 rounded mt-2 hvr-icon-wobble-horizontal"
                                        href="/Job-Internships"><i class="fa fa-arrow-left hvr-icon" aria-hidden="true">
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
                                <p class="text-start">
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
                                <p class="text-end">
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
    </section>
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
