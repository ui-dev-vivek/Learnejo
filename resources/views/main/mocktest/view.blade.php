@php
$title = 'Learnejo:Courses';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">

    <style>
        .ls-box {
            padding: 20px;
            border-radius: 20px;
            border: 1px solid #cac7c7;
            box-shadow: 0px 0px 20px 1px #cac7c7;
            background-color: #FFF;
        }
    </style>
    <x-slot name='hero'>
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class=" p-2">
                            <h2><strong>{{ $getMockTest[0]->name }}</strong> </h2>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <section>
        <div class="row">
            <div class="col-sm-9">
                <div class="row text-center">
                    @forelse ($getMockTest[0]->mockTestHeading as $heading)
                        <div class="col-sm-6">
                            <div class="ls-box z-depth-5" style="border-radius: 8px;">
                                <h4><strong>{{ $heading->name }}</strong></h4>
                                <div class="row">
                                    <div class="col-6"> <small>Taken By : 500 Students</small></div>
                                    <div class="col-6"><a
                                            href="{{ url('/Mock-Test') }}/{{ $pramaLink }}/{{ $getMockTest[0]->prama_link }}/{{ $heading->prama_link }}">Start
                                            Test ></a></div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <h4>No Any Mock Test</h4>
                    @endforelse

                </div>

            </div>
            <div class="col-sm-3 p-1">
                <h4>Top Ranker</h4>
            </div>
        </div>
    </section>
</x-layout.main.base>
