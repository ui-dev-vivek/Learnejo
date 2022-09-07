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
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pt-2 pt-lg-0  d-flex flex-column justify-content-center">
                        <img data-aos="fade-up" width="300" src="{{ asset('assets/image/logo-dark.png') }}"
                            alt="">
                        <br>
                        <h1 style="font-size-adjust: 60px;" data-aos="fade-up" data-aos-delay="400">
                            Learn & <span style="color:rgb(31, 215, 31);">E</span>nhance <span
                                style="color:rgb(31, 215, 31);">J</span>ob
                            <span style="color:rgb(31, 215, 31);">O</span>pportunity !
                        </h1><br>
                    </div>
                    <div class="col-lg-4  ">
                        <div class="shadow z-depth-4 p-2 border border-success px-5 mb-4" data-aos="fade-right"
                            data-aos-delay="100" data-tilt style="border-radius:10px;">
                            <h3>Free M<i class="fa fa-eercast text-success" aria-hidden="true"></i>CK Test</h3>
                            <small>Proper online Assessments to Prepare yourself for Placement.</small>
                        </div>
                        <div class="shadow z-depth-4 p-2 border border-success px-5 mb-4 " data-aos="fade-right"
                            data-aos-delay="200" data-tilt style="border-radius:10px;">
                            <h3>Free C<i class="fa fa-eercast text-success" aria-hidden="true"></i>urses</h3>
                            <small>Udemy and Coursera courses, To Improve Your Learning.</small>
                        </div>
                        <div class="shadow z-depth-4 p-2 border border-success px-5 mb-4 " data-aos="fade-right"
                            data-aos-delay="300" data-tilt style="border-radius:10px;">
                            <h3>Free S<i class="fa fa-eercast text-success" aria-hidden="true"></i>lutions</h3>
                            <small>Get previous Year's Question paper solutions</small>
                        </div>
                    </div>
                </div>
                {{-- Do Some Thing Heat --}}
                <h2>Top Ranker:</h2>
                <div class="row text-centre">
                    <div class="col-sm-6">
                        <div class=" shadow p-2 m-2 me-2 rounded zoom">
                            <img width="70" class="rounded-circle" style="border: 5px solid gold;"
                                src="{{ $getTopRankers[0]->profile_image }}" alt=""> <span
                                class="h4"><strong> {{ $getTopRankers[0]->student_name }} |
                                </strong></span> <span class="text-primary"><strong> Points:
                                    {{ $getTopRankers[0]->points }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class=" shadow p-2 m-2 ms-2 rounded zoom">
                            <img width="70" class="rounded-circle " style="border: 5px solid silver;"
                                src="{{ $getTopRankers[1]->profile_image }}" alt=""> <span
                                class="h4"><strong> {{ $getTopRankers[1]->student_name }}|
                                </strong></span> <span class="text-primary"><strong> Points:
                                    {{ $getTopRankers[1]->points }}</strong></span>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </x-slot>

    <section class="inner-page">
        <div class="container">
            <div class="section-title">
                <h2>Prepare For</h2>
                <p>Prepare For Your Dream Company.</p>
                <span>Prepare For</span>
            </div>
            <span class="h5 mb-5" style="border-bottom:5px solid lightgreen;"><b>Top IT Companies</b></span><br><br>
            <div class="row">
                @forelse ($getTMockTest as $mockTest)
                    <div class="col-sm-3" data-aos="fade-up">
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
                    <div class="col-sm-3" data-aos="fade-up">
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
    </section>

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
                                        {{-- <span class="reviewtext font-italic">Reviews</span>
                                    <div class="reviewstars">
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star text-warning"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <span class="color-4a rating">3</span> <span
                                            class="totalreviews color-4a"></span>
                                    </div> --}}
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

    </section>
    <div class="row">
        <div class="col-sm-6">
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

        <div class="col-sm-6">
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
    </div>
</x-layout.main.base>
