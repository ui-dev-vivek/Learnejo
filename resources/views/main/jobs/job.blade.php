@php
$title = 'Learnejo:Job Internships';
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
                <h1 class="text-center">Job Internships</h1>

            </div>
        </section>
    </x-slot>
    <div class=" mt-1">

        <div class="row">
            <div class="col-1 pt-2 bg-success text-white p-1 text-center">Letest:</div>
            <div class="col-11 p-1 border border-success pt-2">
                <marquee class="GeneratedMarquee" direction="right" scrollamount="8" behavior="scroll">
                    @foreach ($getGovtJobs as $job)
                        <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}"><i class="fa fa-hand-o-right"
                                aria-hidden="true"></i> {{ $job->title }}</a> &nbsp;&nbsp;
                    @endforeach
                </marquee>

            </div>
        </div>
    </div>

    <br>





    <div class="ps-2 pe-2">
        <div class="row">
            <div class="col-md-9">
                <div style="width:100%; border-bottom:5px solid #32c552;" class="ps-4 pb-2 h2">
                    <b>Popular Jobs</b>
                </div> <br>
                <h4 class="m-2"><b>Technical Jobs:</b></h4>
                <div class="row">
                    @forelse ($getCorpJobs as $job)
                        <div class="col-md-6 mb-2">
                            <a href="{{ url('/Job-Internshis') }}/{{ $job->prama_link }}">
                                <div class="shadow rounded-8 p-2  m-1 zoom-x" style="width: 100%">
                                    <div class="" style="max-height:70px; overflow: hidden;">
                                        <img class="text-center shadow z-depth-1 p-1 rounded" width="70"
                                            src="{{ $job->image }}" alt="">
                                        &nbsp;&nbsp; <span class="h6"> {{ $job->title }}</span>
                                    </div>
                                    <div class="row pt-1 text-dark">
                                        <div class="col-6 overflow-hidden">
                                            <small class="overflow-hidden"><i class="fa fa-building-o"
                                                    aria-hidden="true"></i>&nbsp;
                                                &nbsp;{{ $job->company }}</small><br>
                                            <small class="overflow-hidden"><i class="fa fa-user-plus"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                {{ $job->role }}</small>
                                        </div>
                                        <div class="col-6 ">
                                            <small class="overflow-hidden"><i class="fa fa-briefcase"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                {{ $job->experience }}</small><br>
                                            <small class="overflow-hidden"><i class="fa fa-money"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                {{ $job->salary }}</small>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @empty
                        <h3>No Data Found!</h3>
                    @endforelse
                </div><br>
                <x-main.pagination :data="$getGovtJobs" />
                <br>
                <h4 class="m-2"><b>Governments Jobs:</b></h4>
                <div class="row">
                    @forelse ($getGovtJobs as $job)
                        <div class="col-md-6 mb-2">
                            <div class="shadow rounded-8 p-2 m-1 zoom-x">
                                <div class="mb-2" style="height:50px; overflow:hidden;">
                                    <img width="50" class="border shadow rounded"
                                        src="https://assets.baillieogrady.com/images/facebook.svg"
                                        alt="">&nbsp;&nbsp;
                                    <span class="h6">Ingram
                                        Micro
                                        Is Hiring Software Engineer | Entry Level</span>
                                </div>
                                <div class="row">
                                    <div class="col-6">Experience: 0 – 2 years</div>
                                    <div class="col-6">Salary: Best In Industry</div>
                                </div>
                                <small style="font-size: 12px;">Reliance Jio India is hiring freshers as Junior Software
                                    Engineer. </small>

                            </div>
                        </div>
                    @empty
                        <h3>No Data Found!</h3>
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
    </div>

</x-layout.main.base>
