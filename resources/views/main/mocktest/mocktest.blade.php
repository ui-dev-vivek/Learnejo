@php
$title = 'Learnejo:Mock Test';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <br><br><br>

    </x-slot>
    <div class="container">
        <br>
        <h2 class="h3 mb-3" style="border-bottom:4px solid lightgreen;"><i class="fa fa-eercast" aria-hidden="true"></i>
            Technical Mock Test</h2>
        <div class="row">
            @forelse ($getTechMockTest as $mockTest)
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="30">
                    <a href="{{ url('Mock-Test') }}/{{ $mockTest->prama_link }}" class="">
                        <div class="p-2 " data-tilt>
                            <div class="row shadow rounded winter-neva-gradient " style="min-height: 70px;">
                                <div class="col-3 pt-1 text-center bg-white">
                                    <div class="iconc ">
                                        <img width="60" src="{{ $mockTest->image }}" alt="">
                                    </div>
                                </div>
                                <div class="col-8 pt-3 text-center  h5">
                                    {{ $mockTest->name }}
                                </div>
                                <div class="col-1 pt-4">
                                    <i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            @empty
                <div class="h5">There Are No Any Mock Test.</div>
            @endforelse
        </div>
        <br>
        <h3 class="h3 mb-3" style="border-bottom:4px solid lightgreen;"><i class="fa fa-eercast" aria-hidden="true"></i>
            Non-Technical Mock Test</h3>
        <div class="row">
            @forelse ($getNonTechMockTest as $mockTest)
                <div class="col-md-4" data-aos="zoom-in" data-aos-delay="30">
                    <a href="{{ url('Mock-Test') }}/{{ $mockTest->prama_link }}" class="">
                        <div class="p-2" data-tilt>
                            <div class="row shadow rounded deep-blue-gradient " style="min-height: 70px;">
                                <div class="col-3 pt-1 text-center bg-white">
                                    <div class="iconc ">
                                        <img width="60" src="{{ $mockTest->image }}" alt="">
                                    </div>
                                </div>
                                <div class="col-8 pt-3 text-center h5">
                                    {{ $mockTest->name }}
                                </div>
                                <div class="col-1 pt-4">
                                    <i class="fa fa-1x fa-chevron-right" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            @empty
                <div class="h5">There Are No Any Mock Test.</div>
            @endforelse
        </div>
    </div>
</x-layout.main.base>
