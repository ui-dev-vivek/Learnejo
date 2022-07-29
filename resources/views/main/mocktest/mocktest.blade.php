<x-Layout.Main.Base>

    <x-slot name='hero'>
        <!-- ======= Intro Single ======= -->
        <section class="breadcrumbs">
            <div class="container">
                <h1 class="text-center">Mock Test</h1>

            </div>
        </section><!-- End Intro Single-->
    </x-slot>
    <br>
    <h2 class="h3 mb-3" style="border-bottom:4px solid lightgreen;"><i class="fa fa-eercast" aria-hidden="true"></i>
        Technical Mock Test</h2>
    <div class="row">
        @forelse ($getTechMockTest as $mockTest)
            <div class="col-sm-4" data-aos="zoom-in" data-aos-delay="30">
                <a href="{{ url('Mock-Test') }}/{{ $mockTest->prama_link }}" class="text-dark">
                    <div class="p-2 " data-tilt>
                        <div class="row shadow rounded winter-neva-gradient " style="min-height: 70px;">
                            <div class="col-3 pt-1 text-center bg-white">
                                <div class="iconc ">
                                    <img width="60" src="{{ $mockTest->image }}" alt="">
                                </div>
                            </div>
                            <div class="col-8 pt-2 h5">
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
            <div class="col-sm-4" data-aos="zoom-in" data-aos-delay="30">
                <a href="{{ url('Mock-Test') }}/{{ $mockTest->prama_link }}" class="text-dark">
                    <div class="p-2" data-tilt>
                        <div class="row shadow rounded deep-blue-gradient " style="min-height: 70px;">
                            <div class="col-3 pt-1 text-center bg-white">
                                <div class="iconc ">
                                    <img width="60" src="{{ $mockTest->image }}" alt="">
                                </div>
                            </div>
                            <div class="col-8 pt-2 h5">
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

</x-Layout.Main.Base>
