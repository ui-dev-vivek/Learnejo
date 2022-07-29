<x-layout.main.base>
    <x-slot name='hero'> <br> <br>
        <section id="hero" class="d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 pt-2 pt-lg-0  d-flex flex-column justify-content-center">
                        <h1 class="h1" data-aos="fade-up">Learn<span style="color:rgb(31, 215, 31);">ejo</span></h1>
                        <small data-aos="fade-right" data-aos-delay="200">Learn Awesome!</small><br>
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


        </section><!-- End Hero -->
    </x-slot>
</x-layout.main.base>
