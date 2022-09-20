@php
$title = 'Learnejo:Courses';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <!-- ======= Intro Single ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <h1 class="text-center">Free Courses</h1>

            </div>
        </section><!-- End Intro Single-->
    </x-slot>
    <div class=" mt-1">
        <div class="row">
            <div class="col-1 pt-2 bg-success text-white p-1 text-center">Letest:</div>
            <div class="col-11 p-1 border border-success pt-2">
                <marquee class="GeneratedMarquee"direction="left" scrollamount="12" behavior="scroll"
                    onmouseover="this.stop();" onmouseout="this.start();">
                    @foreach ($getCourses as $course)
                        <a href="{{ url('/Courses') }}/{{ $course->prama_link }}"><i class="fa fa-hand-o-right"
                                aria-hidden="true"></i><strong class="h5"> {{ $course->title }}</strong></a>
                        &nbsp;&nbsp;
                    @endforeach
                </marquee>

            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-9">
            <section class="trending-courses container">
                <div class="row">
                    @foreach ($getCourses as $course)
                        <div class="item col-xl-4 col-lg-6 col-12 " data-aos="zoom-in" data-aos-delay="30">
                            <div data-tiltx class="course-tile mb-4 border zoom ">
                                <a href="/Courses/{{ $course->prama_link }}" target="_blank"
                                    class="trending-course-link" data-course-title="{{ $course->title }}">
                                    <div data-tiltx class="course-featured-image img-div">
                                        <p class="top-right bg-primary p-1">{{ $course->type }}</p>
                                        <p class="bottom-left"> {{ $course->catg }}</p>
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
                    @endforeach


                </div>
                <x-main.pagination :data="$getCourses" />
            </section>
        </div>
        <div class="col-sm-3"><br><br>
            <div class="shadow p-1 pt-3 border">
                <p><strong>Recent Mock Test</strong></p>
                @forelse ($getMock as  $mock)
                    <a href="{{ url('/Mock-Test') }}/{{ $mock->prama_link }}">
                        <div class="p-1  border-bottom">
                            <img width="50" src="{{ $mock->image }}" alt=""> &nbsp; &nbsp;
                            {{ $mock->name }}
                        </div>
                    </a>
                @empty
                    <h4>No Mock Test Found!</h4>
                @endforelse
                <br>
                <p><strong>Recent Jobs</strong></p>
                @forelse ($getJobs as  $job)
                    <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                        <div class="p-1  border-bottom">
                            <div class="row">
                                <div class="col-2"> <img width="50" src="{{ $job->image }}" alt="">
                                </div>
                                <div class="col-10"><small>{{ $job->title }}</small></div>
                            </div>


                        </div>
                    </a>
                @empty
                    <h4>No Jobs Found!</h4>
                @endforelse

            </div>
        </div>
    </div>


    {{-- <x-mocktest.listing /> --}}
</x-layout.main.base>
