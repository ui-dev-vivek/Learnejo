<x-layout.main.base :title="$course->title" :image="$course->image" :description="$course->title">
    @section('css')
        <link rel="stylesheet" href="{{ asset('/assets/css/hover.css') }}">
    @stop
    <x-slot name='hero'>
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">

                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->
    </x-slot>

    <div class="row">
        <div class="col-md-2">
            <div class="rounded-8 p-3 shadow z-depth-3">
                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="3842768123"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="col-md-8">
            <div class="rounded-8 p-3 shadow z-depth-3">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="p-2">
                            <img class="img-fluid rounded-8" src="{{ $course->image }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3">
                            <h5 class="h5">{{ $course->title }}</h5>
                            <div class="row">
                                <div class="col-6 p-1 bg-success text-white text-center">
                                    <strong>{{ $course->catg }}</strong>
                                </div>
                                <div class="col-6 p-1 bg-danger text-white text-center"><strong>Free</strong></div>
                                <small class="p-2">{{ $course->sort_desc }}</small>
                                <div style="max-height:150px;">
                                    <!-- 160pxcode -->
                                    <ins class="adsbygoogle" style="display:block"
                                        data-ad-client="ca-pub-7119514135532896" data-ad-slot="2100620665"
                                        data-ad-format="auto" data-full-width-responsive="true"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                                </div>
                                <p class="text-end mt-2"><a
                                        class="p-2 bg-primary rounded text-white hvr-icon-wobble-horizontal"
                                        href="{{ url('/Courses') }}/{{ $course->prama_link }}"><strong>Get Free
                                            Course</strong>
                                        <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a></p>
                            </div>
                        </div>
                    </div>
                </div>
                </a> <br><a href="https://learnejo.com/Join-Us-With-Whatsapp" target="_blank">
                    <h5 class="h5 text-succes text-center"> <i class="fa fa-whatsapp " aria-hidden="true"></i>Join Us On
                        What''sapp</h5>
                </a>
            </div> <br>
            <div class="rounded-8 p-3 shadow z-depth-3">
                <h5 class="h5 mb-2">Other Courses:</h5>
                @forelse ($courses as $course)
                    <div class="shadow mb-2 p-2 ps-3 shadow rounded z-depth-1 zoom-x" style="width: 100%;">
                        <a href="">
                            <h6 class="h6">{{ $course->title }}</h6>
                        </a>
                    </div>
                @empty
                    <p>No Courses Found!</p>
                @endforelse


                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="3842768123"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

        </div>
        <div class="col-md-2">
            <div class="rounded-8 p-3 shadow z-depth-3">
                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="3842768123"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </div>

</x-layout.main.base>
