@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">

@stop
<x-layout.main.base :title="$course->title" :image="$course->image" :description="$course->title">

    <style>
    </style>
    <x-slot name='hero'>

        <div class="bg-success p-3 hero-imgs">
            <br><br><br>
            <div class="container p-1 ">
                <div class="row">
                    <div class="col-md-4 ">
                        <img src="{{ $course->image }}" class="img-fluid shadow  border border-info rounded-8"
                            alt="">
                    </div>
                    <div class="col-md-8 pt-4">
                        <h1 class="h1 text-white">{{ $course->title }}</h1>
                        <small class="text-white"><strong><i class="fa fa-edit"></i> Team Learnejo, <i
                                    class="fa fa-th-list"></i>
                                {{ $course->catg }}, <i class="fa fa-eye"></i>
                                {{ $course->view }},
                                <i class="fa fa-user-plus""></i> {{ $course->enroll }}, <i class="fa fa-calendar"></i>
                                {{ $course->created_at }}</strong></small>
                    </div>
                </div>

            </div>
        </div>

    </x-slot>
    <br>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-8">

                <div class="shadow p-2 text-center">
                    <!-- Display-Horizontal -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>

                <div class="shadow mt-3 p-3">
                    <p class="text-center text-primary">
                    <h1 class="h3">{{ $course->title }}</h1>

                    </p>
                    <p class="">
                        {{-- Horizontal Ads --}}
                        <!-- Display-Horizontal -->
                        {{-- <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script> --}}
                    </p>

                    <p>

                        <?php
                        echo $course->content;
                        ?>
                    </p>
                    <div class="mt-2 text-center">
                        <a href="https://www.youtube.com/watch?v=Q_q8hcTcSLU" target="_blank">
                            <span class="h2"> <i class="fa fa-angle-double-right"></i><i
                                    class="fa fa-angle-double-right"></i> </span> <img class=" w-50 btn rounded"
                                src="{{ asset('assets/image/how-to-enroll-courses.webp') }}"
                                alt="How To Enroll Udemy Courses For Free.">
                            <span class="h2"> <i class="fa fa-angle-double-left"></i> <i
                                    class="fa fa-angle-double-left"></i></span>
                        </a>

                    </div>
                    <blockquote class="blockquote">
                        <p class="mb-4">{{ $course->title }} <br>
                            <small>The above course description is taken from <a
                                    href="https://udemy.com">Udemy</a>.</small>
                        </p>

                        <footer class="blockquote-footer">
                            <strong>By Team Learnejo</strong>
                            <cite title="Source Title"></cite>
                        </footer>
                    </blockquote>

                    <p class="text-center">
                        <!-- Display-Horizontal -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                            data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        <a class="btn btn-md btn-success" href="{{ $course->link }}">Enroll Now</a>
                        <!-- Display-Horizontal -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                            data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </p>


                </div>




            </div>
            <div class="col-md-4 ps-2">
                <div class="shadow p-2 text-center">
                    <h3 class="h3">To Get Paid Udemy Courses For <strong class="text-danger">Free</strong> </h3>
                    <a href="https://learnejo.com/Join-Us-With-Whatsapp" class="h4 mb-1"><i
                            class="fa fa-whatsapp text-success"></i> Join Group</a>
                </div><br>
                <div class="shadow p-2 text-center">
                    {{-- Squir Ads --}}
                    <!-- Display-Square -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="7763649496" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div><br>
                {{-- <div class="shadow p-2 text-center">
                    
                <!-- Display-Vertical -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="1712412310" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div> --}}

                @forelse ($getCourses as $course)
                    <div class="mb-2 p-2 shadow">
                        <a href="{{ url('/Courses') }}/{{ $course->prama_link }}">
                            <div class="row">
                                <div class="col-4">
                                    <img width="100" class="img-fluid" src="{{ $course->image }}" alt="">

                                </div>
                                <div class="col-8"><strong>{{ $course->title }}</strong></div>
                            </div>
                        </a>
                    </div>
                @empty
                    <p>No Data Found!.</p>
                @endforelse
                <br>
                <div class="shadow p-2 text-center">
                    <h3 class="h3">To Get Jobs Update <strong class="text-danger"></strong></h3>
                    <a href="https://telegram.me/job_learnejo" class="h4 mb-1"><i class="fa fa-telegram text-info"></i>
                        Join Group</a>
                </div>
            </div>
        </div>

    </div>
    <br><br>

    {{-- <p class="container text-center">
        <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed"
            data-ad-client="ca-pub-7119514135532896" data-ad-slot="3004592505"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </p> --}}
    @section('script')
        <script src="{{ asset('assets/ajax/enroll-now.js') }}"></script>
    @stop
</x-Layout.Main.Base>
