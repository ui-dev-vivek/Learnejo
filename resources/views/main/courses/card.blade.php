<x-layout.main.base :title="$course->title" :image="$course->image" :description="$course->title">
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
        <div class="col-md-2"></div>
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
                    <h5 class="h5 text-succes text-center"> <i class="fa fa-whatsapp " aria-hidden="true"></i> For
                        Latest
                        Updates
                        Join Our Whatsapp Group, For letest Courses.</h5>
                </a>
            </div> <br>
            <div class="rounded-8 p-3 shadow z-depth-3">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                    crossorigin="anonymous"></script>
                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="3842768123"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

        </div>
        <div class="col-md-2"></div>
    </div>

</x-layout.main.base>
