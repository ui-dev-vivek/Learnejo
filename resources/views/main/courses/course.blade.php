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


    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <section class="trending-courses container">
                    @php
                        $massage = 'whatsapp://send?text=*Free Courses*%0a';
                        $sr = 1;
                    @endphp
                    @foreach ($getCourses as $course)
                        @php
                            $massage = $massage . '*' . $sr . ':' . $course->title . '*%0a https://learnejo.com/Courses/Card/' . $course->prama_link . '%0a%0a';
                            $sr++;
                        @endphp
                    @endforeach
                    @php
                        $massage = str_replace('&', 'and', $massage);
                    @endphp
                    <a class="btn m-3  btn-success" href="{{ $massage }}">
                        <i class="fa fa-share-alt sid{{ $course->id }}" aria-hidden="true"></i> Share On Whatsapp
                        <i class="fa fa-whatsapp"></i>
                    </a>
                    <div class="row">
                        <div class="item col-xl-4 col-lg-6 col-12 " data-aos="zoom-in" data-aos-delay="30">
                            <div data-tiltx class="course-tile mb-4 border zoom ">
                                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                                    data-ad-slot="3842768123"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || [])
                                    .push({});
                                </script>
                            </div>
                        </div>

                        @foreach ($getCourses as $course)
                            <div class="item col-xl-4 col-lg-6 col-12 " data-aos="zoom-in" data-aos-delay="30">
                                <div data-tiltx class="course-tile mb-4 border zoom ">
                                    <a href="/Courses/{{ $course->prama_link }}" target="_blank"
                                        class="trending-course-link" data-course-title="{{ $course->title }}">
                                        <div data-tiltx class="course-featured-image img-div">
                                            <p class="top-right bg-primary p-1" style="font-size: 10px;">
                                                {{ $course->type }}</p>
                                            <p class="bottom-left" style="font-size: 10px;">{{ $course->catg }}</p>
                                            <p class="bottom-right" style="font-size: 10px;"><span
                                                    class="bg-danger p-1">Free</span>
                                            </p>
                                            <img src="{{ $course->image }}" class="img-fluid blur-up lazyloaded">
                                        </div>
                                        <article class="course-info border-success" style="min-height:200px">
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
                        @endforeach
                        <div class="item col-xl-4 col-lg-6 col-12 " data-aos="zoom-in" data-aos-delay="30">
                            <div data-tiltx class="course-tile mb-4 border zoom ">
                                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                                    data-ad-slot="3842768123"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || [])
                                    .push({});
                                </script>
                            </div>
                        </div>
                    </div>
                    <x-main.pagination :data="$getCourses" />
                </section>
            </div>
            <div class="col-md-3"><br><br>
                <div class="ms-1">
                    <h6 class="h5 text-center">Give Mock-Test for MNC's <br><br>
                        <p> <a class="p-1 border border-success rounded-8" href="{{ url('/Mock-Test') }}">Try
                                Now</a>
                        </p>
                        </h4>
                        <hr>
                        <!-- Display-Vertical -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                            data-ad-slot="1712412310" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                </div>
            </div>
        </div>

    </div>
    <div class="p-1">
        <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed"
            data-ad-client="ca-pub-7119514135532896" data-ad-slot="3004592505"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>


</x-layout.main.base>
