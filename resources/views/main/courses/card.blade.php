<x-layout.main.base :title="$course->title" :image="$course->image" :description="$course->title">
    @section('css')
        <link rel="stylesheet" href="{{ asset('/assets/css/hover.css') }}">
    @stop
    <x-slot name='hero'>
        <div style="min-height: 150px;">
            <!-- Display-Horizontal -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    </x-slot>

    <div class="row">
        <div class="col-md-8">
            <div class="rounded-8 p-2 m-1 ">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="p-2">
                            <img class="img-fluid rounded-8" src="{{ $course->image }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3">
                            <h5 class="h5">{{ $course->title }}</h5>
                            <b class="p-1">{{ $difference }}</b>
                            <div class="row">
                                <div class="col-6 p-1 bg-success text-white text-center">
                                    <strong>{{ $course->catg }}</strong>
                                </div>
                                <div class="col-6 p-1 bg-danger text-white text-center"><strong>Free</strong></div>
                                <small class="p-2">{{ $course->sort_desc }}</small>
                                <div>
                                    <!-- Display-Square -->
                                    <ins class="adsbygoogle" style="display:block"
                                        data-ad-client="ca-pub-7119514135532896" data-ad-slot="7763649496"
                                        data-ad-format="auto" data-full-width-responsive="true"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                                </div>
                                <p class="text-end "><a class="p-2  hvr-icon-wobble-horizontal"
                                        href="{{ url('/Courses') }}/{{ $course->prama_link }}"><strong><small>Get Free
                                                Course</small></strong>
                                        <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a>
                                </p>
                                <!-- 300x50 -->
                                <ins class="adsbygoogle" style="display:inline-block;width:328px;height:50px"
                                    data-ad-client="ca-pub-7119514135532896" data-ad-slot="3353114276"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="text-center">
                    </a> <br><a href="https://learnejo.com/Join-Us-With-Whatsapp" target="_blank">
                        <span class="h6 text-succes"> <i class="fa fa-whatsapp " aria-hidden="true"></i>Join Us
                            On
                            What'sapp</span>
                    </a>&nbsp;
                    <a href="https://telegram.me/free_courses2_learnejo" target="_blank">
                        <span class="h6 text-info"> <i class="fa fa-telegram " aria-hidden="true"></i>Join Us
                            On
                            Telegram</span>
                    </a>
                </p>
            </div> <br>
            <div class="p-2">
                <h5 class="h5 mb-2">Other Courses:</h5>
                @forelse ($courses as $course)
                    <div class=" mb-2 p-2 ps-3 border-bottom   zoom-x" style="width: 100%;">
                        <img width="40" src="{{ $course->image }}" alt="">&nbsp;&nbsp;
                        <a href="{{ url('Courses') }}/{{ $course->prama_link }}">
                            <span class="h6">{{ $course->title }}</span>
                        </a>
                    </div>
                @empty
                    <p>No Courses Found!</p>
                @endforelse
                <!-- Display-Square -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="7763649496" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>

        </div>
        <div class="col-md-4">
            <div class="ms-1">
                <!-- Display-Vertical -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="1712412310" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <div class="p-1">
            <!-- Display-Horizontal -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
</x-layout.main.base>
