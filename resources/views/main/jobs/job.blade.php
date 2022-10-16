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

    <div class="row ">

        <div class="col-md-12">
            <section class="p-3 ms-5 me-5 rounded-8 shadow z-depth-2  d-none d-lg-block">
                <div class="row">
                    @forelse ($get8 as $job)
                        <div class="col-md-3 ">
                            <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                                <div class="zoom-x p-2 pt-4 mb-3 text-dark tempting-azure-gradient rounded-8 text-center"
                                    style="min-height:120px; overflow: hidden;">

                                    <h4 class="h5 text-dark">{{ $job->title }}</h4>
                            </a>
                        </div>
                </div>
            @empty
                <small>No Jobs Founde.</small>
                @endforelse
        </div>
        </section>
        <div class=" p-2 m-4 text-center">
            <a href="https://telegram.me/job_learnejo" target="_blank">
                <h5 class="h5 text-info"> <i class="fa fa-telegram  text-info" aria-hidden="true"></i> For Latest
                    Updates
                    Join Our Telegram Group.</h5>
            </a>
        </div>
    </div>

    <div class="container-fluid">
        <h5 class="h3">Jobs & Internships</h5>
        <hr>
        <div class="row">
            @forelse ($getCorpJobs as $job)
                <div class="col-md-6">
                    <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                        <div class="p-1 rounded-8 mb-2 border-bottom">
                            <div class="row">
                                <div class="col-3 text-end">
                                    <img width="80" class="img-fluid" src="{{ $job->image }}" alt="">
                                </div>
                                <div class="col-9 h6 text-dark pt-2">
                                    {{ $job->title }}
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @empty
            @endforelse
        </div>
    </div>

    {{-- <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="rounded-8 shadow p-2">
                    <h4 class="p-2 text-center bg-success rounded-8 h4">Jobs</h4>
                    <hr>
                    @php
                        $count = 0;
                    @endphp
                    @forelse ($getCorpJobs as $job)
                        <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                            <div class="shadow rounded p-2 ps-1 mb-3 border border-success zoom-x" style="width: 100%;">
                                <p><img class="p-1 rounded shadow z-depth-2" width="50" src="{{ $job->image }}"
                                        alt="">&nbsp; <strong> {{ $job->title }}</strong>
                                </p>
                                <div class="row  text-dark">
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
                            <div class="shadow rounded p-2 ps-1 mb-3 border border-success zoom-x" style="width: 100%;">
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
                            @php
                                $count++;
                            @endphp
                        @endif
                    @empty
                    @endforelse
                </div>

            </div>
            <div class="col-md-6">
                <div class="rounded-8 shadow p-2">
                    <h4 class="p-2 text-center bg-success rounded-8 h4">Internships</h4>
                    <hr>
                    @php
                        $count = 0;
                    @endphp

                    @forelse ($getInt as $job)
                        <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                            <div class="shadow rounded p-2 ps-1 mb-3 border border-success zoom-x" style="width: 100%;">
                                <p><img class="p-1 rounded shadow z-depth-2" width="50" src="{{ $job->image }}"
                                        alt="">&nbsp; <strong> {{ $job->title }}</strong>
                                </p>
                                <div class="row  text-dark">
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
                                                {{ $job->salary }} {{ $count }}</small></span>
                                    </div>
                                </div>
                            </div>
                        </a>

                        @if ($count % 3 == 0)
                            <div class="shadow rounded p-2 ps-1 mb-3 border border-success zoom-x" style="width: 100%;">
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
                        @endif`

                    @empty
                    @endforelse
                </div>

            </div>

        </div>
        <div class="text-center">
            <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                crossorigin="anonymous"></script>
            <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed"
                data-ad-client="ca-pub-7119514135532896" data-ad-slot="3004592505"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </div> --}}
    <div class=" p-2 m-5 text-center shadow z-depth-3 rounded-8">
        <h4 class="h4">Join Us On Social Networks</h4>
        <hr>
        <a href="https://telegram.me/job_learnejo" target="_blank">
            <h5 class="h5 text-info"> <i class="fa fa-telegram  text-info" aria-hidden="true"></i> For Latest
                Updates
                Join Our Telegram Group.</h5>
        </a> <br><a href="https://learnejo.com/Join-Us-With-Whatsapp" target="_blank">
            <h5 class="h5 text-success"> <i class="fa fa-whatsapp " aria-hidden="true"></i> For Latest
                Updates
                Join Our Whatsapp Group.</h5>
        </a>
    </div>
    <div class="container text-center">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
            crossorigin="anonymous"></script>
        <!-- Display 2 -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
            data-ad-slot="8356744114" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
</x-layout.main.base>
{{-- @if ($count % 3 == 0)
    <div class="shadow rounded mb-3 p-2  m-1 zoom-x" style="width: 100%" data-aos="zoom-in" data-aos-delay="30">
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
            crossorigin="anonymous"></script>
        <ins class="adsbygoogle" style="display:block" data-ad-format="fluid" data-ad-layout-key="-gr-l+21-ab+j5"
            data-ad-client="ca-pub-7119514135532896" data-ad-slot="4299430672"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || [])
            .push({});
        </script>
    </div>
@endif
<x-main.pagination :data="$getGovtJobs" /> --}}
