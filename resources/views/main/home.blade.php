@php
$title = 'Learnejo:Home';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'> <br> <br>
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pt-2 pt-lg-0  d-flex flex-column justify-content-center">
                        {{-- <h1 class="h1" data-aos="fade-up">Learn<span style="color:rgb(31, 215, 31);">ejo</span></h1> --}}
                        <img data-aos="fade-up" width="300" src="{{ asset('assets/image/logo-dark.png') }}"
                            alt="">
                        <br> {{-- <small data-aos="fade-right" data-aos-delay="200">Learn Awesome!</small><br> --}}
                        <h1 style="font-size-adjust: 60px;" data-aos="fade-up" data-aos-delay="400">
                            Learn & <span style="color:rgb(31, 215, 31);">E</span>nhance <span
                                style="color:rgb(31, 215, 31);">J</span>ob
                            <span style="color:rgb(31, 215, 31);">O</span>pportunity !
                        </h1><br>
                    </div>
                    <div class="col-lg-4  ">
                        {{-- <img src="assets/img/hero-img.png" class="img-fluid animated" alt=""> --}}
                        <div class="shadow z-depth-4 p-2 border border-success px-5 mb-4" data-aos="fade-right"
                            data-aos-delay="100" data-tilt style="border-radius:10px;">
                            <h3>Free M<i class="fa fa-eercast text-success" aria-hidden="true"></i>CK Test</h3>
                            <small>Proper online Assments to Prepare yourself for Placement.</small>
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
                        <div class=" shadow p-2 m-1 rounded">
                            <img width="70" class="rounded-circle" style="border: 5px solid gold;"
                                src="{{ $getTopRankers[0]->profile_image }}" alt=""> <span
                                class="h4"><strong> {{ $getTopRankers[0]->student_name }} |
                                </strong></span> <span class="text-primary"><strong> Points:
                                    {{ $getTopRankers[0]->points }}</strong></span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class=" shadow p-2 m-1 rounded">
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
                <h2>Preaper For</h2>
                <p></p>
                <span>Preaper For</span>
            </div>
            <div class="row">
                <div class="col-sm-6" data-aos="fade-right">
                    <div class="shadow z-depth-3 border border-success p-2 m-1" style="border-radius: 10px;">
                        <img class="" width="100"
                            src="https://rntracoc.sirv.com/MockTest/wipro-primary-logo-color-rbg.png?w=300&h=300"
                            alt=""> <span class="h2"><a href="{{ url('/Mock-Test') }}/Wipro-NLTH"> Wipro
                                Limited</a></span>
                        <hr style="border:2px solid lightgreen;">
                        <div class="row">
                            <div class="col-4">
                                Mock Test: 40+
                            </div>
                            <div class="col-4">
                                Quiz: 10+
                            </div>
                            <div class="col-4">
                                Solution:10+
                            </div>
                            <div class="col-4">
                                Coading:15+
                            </div>
                            <div class="col-4">
                                Attemped:400+
                            </div>
                            <div class="col-4">
                                Mcqs:50+
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-left">
                    <div class="shadow z-depth-3 border border-success p-2 m-1" style="border-radius: 10px;">
                        <img class="" width="100"
                            src="https://rntracoc.sirv.com/MockTest/images.jpg?w=300&h=300" alt=""> <span
                            class="h2"><a href="{{ url('/Mock-Test') }}/Tcs-Ninja"> Tcs Ninja</a></span>
                        <hr style="border:2px solid lightgreen;">
                        <div class="row">
                            <div class="col-4">
                                Mock Test: 50+
                            </div>
                            <div class="col-4">
                                Quiz: 20+
                            </div>
                            <div class="col-4">
                                Solution:10+
                            </div>
                            <div class="col-4">
                                Coading: 9+
                            </div>
                            <div class="col-4">
                                Attemped:700+
                            </div>
                            <div class="col-4">
                                Mcqs:30+
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <span class="h5 mb-4" style="border-bottom:2px solid lightgreen;"> Explor Others: </span><br><br>
            <div class="row">
                @forelse ($getTMockTest as $mockTest)
                    <div class="col-sm-3" data-aos="fade-in">
                        <a href="{{ url('/Mock-Test') }}/{{ $mockTest->prama_link }}">
                            <div class="shadow border border-info px-2  p-1 m-1">
                                <img width="30" class="rounded-circle" src="{{ $mockTest->image }}"
                                    alt="">
                                &nbsp;&nbsp; {{ $mockTest->name }}
                            </div>
                        </a>
                    </div>
                @empty
                    <h2>No Any Mock Test!</h2>
                @endforelse

            </div>

            <br>
            <div class="row">
                <div class="col-sm-6" data-aos="fade-right">
                    <div class="shadow z-depth-3 border border-success p-2 m-1" style="border-radius: 10px;">
                        <img class="" width="100"
                            src="https://rntracoc.sirv.com/MockTest/1648834624.png?w=300&h=300" alt=""> <span
                            class="h2"><a href="{{ url('/Mock-Test') }}/SSC"> &nbsp; &nbsp; SSC</a></span>
                        <hr style="border:2px solid lightgreen;">
                        <div class="row">
                            <div class="col-4">
                                Mock Test: 70+
                            </div>
                            <div class="col-4">
                                Quiz: 100+
                            </div>
                            <div class="col-4">
                                Solution:20
                            </div>
                            <div class="col-4">
                                Coading:0
                            </div>
                            <div class="col-4">
                                Attemped:1000+
                            </div>
                            <div class="col-4">
                                Mcqs:60+
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6" data-aos="fade-left">
                    <div class="shadow z-depth-3 border border-success p-2 m-1" style="border-radius: 10px;">
                        <img class="" width="100"
                            src="https://mocktest.freshersnow.com//uploads/exams/categories/31-catimage.png"
                            alt=""> <span class="h2"><a href="{{ url('/Mock-Test') }}/RRB-NTPC">
                                RRB-NTPC </a></span>
                        <hr style="border:2px solid lightgreen;">
                        <div class="row">
                            <div class="col-4">
                                Mock Test: 120+
                            </div>
                            <div class="col-4">
                                Quiz: 12+
                            </div>
                            <div class="col-4">
                                Solution:12+
                            </div>
                            <div class="col-4">
                                Coading:0
                            </div>
                            <div class="col-4">
                                Attemped:231
                            </div>
                            <div class="col-4">
                                Mcqs:23+
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <span class="h5 mb-4" style="border-bottom:2px solid lightgreen;"> Explor Others: </span><br><br>
            <div class="row">

                @forelse ($getNTMockTest as $mockTest)
                    <div class="col-sm-3" data-aos="fade-in">
                        <a href="{{ url('/Mock-Test') }}/{{ $mockTest->prama_link }}">
                            <div class="shadow border border-info px-2  p-1 m-1">
                                <img width="30" class="rounded-circle" src="{{ $mockTest->image }}"
                                    alt="">
                                &nbsp;&nbsp; {{ $mockTest->name }}
                            </div>
                        </a>
                    </div>
                @empty
                    <h2>No Any Mock Test!</h2>
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
                <div class="row">
                    @foreach ($getCourses as $course)
                        <div class="item col-xl-3 col-lg-3 col-12" data-aos="zoom-in" data-aos-delay="30">
                            <div data-tilt class="course-tile mb-4">
                                <a href="https://learnejo.com/Courses/{{ $course->prama_link }}" target="_blank"
                                    class="trending-course-link" data-course-title="{{ $course->title }}">
                                    <div data-tilt class="course-featured-image">
                                        <img src="{{ $course->image }}" class="img-fluid blur-up lazyloaded">
                                    </div>
                                    <article class="course-info">
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
                                        <span class="reviewtext font-italic">Reviews</span>
                                        <div class="reviewstars">
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star text-warning"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <span class="color-4a rating">3</span> <span
                                                class="totalreviews color-4a"></span>
                                        </div>
                                    </article>
                                </a>
                            </div>
                        </div>
                    @endforeach

                </div>

                <p class="text-end"><a class="btn btn-md btn-success" href="{{ url('/Courses') }}">More Courses
                        <i class="fa fa-arrow-right" aria-hidden="true"> </i> </a></p>

            </section>
        </div>

    </section>
    <div class="row">
        <div class="col-sm-6">
            <section class="inner-page">
                <div class="container">
                    <div class="section-title">
                        <h2>Top Rankers</h2>
                        {{-- <p>To Improve Your <b>Resume</b>.</p> --}}
                        <span>Top Rankers</span>
                    </div>

                    @forelse ($ranker as $ranker)
                        <div class=" border p-1 m-1">
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
                        {{-- <p>To Improve Your <b>Resume</b>.</p> --}}
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
                        <p>No any Jobs.</p>
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
                        <p>No any Jobs.</p>
                    @endforelse
                    <p class="text-end"><a class="btn btn-md btn-success" href="{{ url('/Job-Internships') }}">More
                            Jobs
                            <i class="fa fa-arrow-right" aria-hidden="true"> </i> </a></p>
                </div>
            </section>
        </div>
    </div>

</x-layout.main.base>
