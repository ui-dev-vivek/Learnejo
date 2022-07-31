@php
$title = 'Learnejo:Job Internships';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
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
    <div class="row">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm">
                    @forelse ($getCorpJobs as $job)
                        <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                            <div class="shadow p-1 rounded m-2">
                                <div class="row">
                                    <div class="col-2 text-centre">
                                        <img width="50" src="{{ $job->image }}" alt="{{ $job->title }}">
                                    </div>
                                    <div class="col-10">
                                        {{ $job->title }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <h3>No Data Found!</h3>
                    @endforelse
                </div>
                <div class="col-sm">
                    @forelse ($getGovtJobs as $job)
                        <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                            <div class="shadow p-1 rounded m-2">
                                <div class="row">
                                    <div class="col-2 text-centre">
                                        <img width="50" src="{{ $job->image }}" alt="{{ $job->title }}">
                                    </div>
                                    <div class="col-10">
                                        {{ $job->title }}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <h3>No Data Found!</h3>
                    @endforelse

                </div>
            </div>
            <br>
            <x-main.pagination :data="$getGovtJobs" />

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

</x-layout.main.base>
