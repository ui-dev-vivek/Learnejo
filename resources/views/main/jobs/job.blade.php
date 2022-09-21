@php
$title = 'Learnejo:Job Internships';
$image = asset('assets/image/job.jpg');
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
                <h1 class="text-center">Job Internships</h1>

            </div>
        </section>
    </x-slot>
    <div class=" mt-1">

        <div class="row">
            <div class="col-1 pt-2 bg-success text-white p-1 text-center">Letest:</div>
            <div class="col-11 p-1 border border-success pt-2">
                <marquee class="GeneratedMarquee" direction="left" scrollamount="10" behavior="scroll"
                    onmouseover="this.stop();" onmouseout="this.start();">
                    @forelse ($getCorpJobs as $job)
                        <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}"><i class="fa fa-hand-o-right"
                                aria-hidden="true"></i><strong class="h5"> {{ $job->title }}</strong></a>
                        &nbsp;&nbsp;
                    @empty
                        <p>No Jobs Found!</p>
                    @endforelse
                </marquee>

            </div>
        </div>
    </div>

    <br>



    @php
        count = 0;
    @endphp
    <div class="ps-2 pe-2">
        <div class="row">
            <div class="col-md-9">
                <div style="width:100%; border-bottom:5px solid #32c552;" class="ps-4 pb-2 h2">
                    <b>Popular Jobs</b>
                </div> <br>
                <h4 class="m-2"><b>Technical Jobs:</b></h4>
                <div class="row">
                    @forelse ($getCorpJobs as $job)
                        <div class="col-md-1"></div>
                        <div class="col-md-9">
                            <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                                <div class="shadow rounded mb-3 p-2  m-1 zoom-x" style="width: 100%" data-aos="zoom-in"
                                    data-aos-delay="30">
                                    <div class="" style="max-height:70px; overflow: hidden;">
                                        <img class="text-center shadow z-depth-1 p-1 rounded" width="90"
                                            src="{{ $job->image }}" alt="">
                                        &nbsp;&nbsp; <span class="h5"> {{ $job->title }}</span>
                                    </div>
                                    <div class="row pt-1 text-dark">
                                        <div class="col-6 overflow-hidden">
                                            <span class="overflow-hidden"> <small><i class="fa fa-building-o"
                                                        aria-hidden="true"></i>&nbsp;
                                                    &nbsp;{{ $job->company }}</small></span><br>
                                            <span class="overflow-hidden"> <small><i class="fa fa-user-plus"
                                                        aria-hidden="true"></i>&nbsp;&nbsp;
                                                    {{ $job->role }}</small></span>
                                        </div>
                                        <div class="col-6 ">
                                            <span class="overflow-hidden"><small><i class="fa fa-briefcase"
                                                        aria-hidden="true"></i>&nbsp;&nbsp;
                                                    {{ $job->experience }}</small></span><br>
                                            <span class="overflow-hidden"> <small><i class="fa fa-money"
                                                        aria-hidden="true"></i>&nbsp;&nbsp;
                                                    {{ $job->salary }}</small></span>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            @if ($count % 3 == 0)
                                <div class="shadow rounded mb-3 p-2  m-1 zoom-x" style="width: 100%" data-aos="zoom-in"
                                    data-aos-delay="30">
                                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                                        crossorigin="anonymous"></script>
                                    <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                                        data-ad-layout-key="-gr-l+21-ab+j5" data-ad-client="ca-pub-7119514135532896"
                                        data-ad-slot="4299430672"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || [])
                                        .push({});
                                    </script>
                                </div>
                            @endif

                        </div>
                        <div class="col-md-2"></div>
                        @php
                            $count++;
                        @endphp
                    @empty
                        <small>No Jobs Founde.</small>
                    @endforelse
                </div><br>
                <x-main.pagination :data="$getGovtJobs" />
                <br>
                <h4 class="m-2"><b>Governments Jobs:</b></h4>
                <div class="row">
                    @forelse ($getGovtJobs as $job)
                        <div class="row">
                            <div class="col-md-1"></div>
                            <div class="col-md-9 ">
                                <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                                    <div class="row p-2  mb-3 shadow ">
                                        <div class="col-3 text-center">
                                            <img width="130"
                                                class="text-center shadow img-fluid z-depth-1 p-1 rounded"
                                                src="{{ $job->image }}" alt="{ $job->title }}">
                                        </div>
                                        <div class="col-9">
                                            <h5 class="h5">{{ $job->title }}</h6>
                                                <div class="row pt-1 text-dark">
                                                    <div class="col-6 overflow-hidden">
                                                        <span class="overflow-hidden"> <small><i
                                                                    class="fa fa-building-o"
                                                                    aria-hidden="true"></i>&nbsp;
                                                                &nbsp;{{ $job->company }}</small></span><br>
                                                        <span class="overflow-hidden"> <small><i class="fa fa-user-plus"
                                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                                {{ $job->role }}</small></span>
                                                    </div>
                                                    <div class="col-6 ">
                                                        <span class="overflow-hidden"><small><i class="fa fa-briefcase"
                                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                                {{ $job->experience }}</small></span><br>
                                                        <span class="overflow-hidden"> <small><i class="fa fa-money"
                                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                                {{ $job->salary }}</small></span>
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                </a>
                            </div>


                            <div class="col-md-2"></div>
                        </div>

                    @empty
                        <small>No Courses Founde.</small>
                    @endforelse
                </div>

                <br>
                <x-main.pagination :data="$getGovtJobs" />

            </div>
            <div class="col-md-3"><br><br>
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
                    <p><strong>Recent Courses</strong></p>
                    @forelse ($getCourses as  $job)
                        <a href="{{ url('/Courses') }}/{{ $job->prama_link }}">
                            <div class="p-1  border-bottom">
                                <div class="row">
                                    <div class="col-2"> <img width="50" src="{{ $job->image }}"
                                            alt="">
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
    </div>

</x-layout.main.base>
