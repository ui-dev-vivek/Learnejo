@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$course->title" :image="$course->image" :description="$course->title">

    <x-slot name='hero'>
        <br><br><br>

    </x-slot>
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
                    <h1 class="h2">{{ $course->title }}</h1>
                    <div class="post-information">
                        <ul class="list-inline text-center color-a">
                            <li class="list-inline-item mr-2">
                                <b>Author: </b>
                                <span class="color-text-a">Team Learnejo</span>
                            </li>
                            <li class="list-inline-item mr-2">
                                <b>Category: </b>
                                <span class="color-text-a">{{ $course->catg }}</span>
                            </li>
                            <li class="list-inline-item mr-2">
                                <b>Views: </b>
                                <span class="color-text-a">{{ $course->view }}</span>
                            </li>
                            <li class="list-inline-item">
                                <strong>Date: </strong>
                                <span class="color-text-a">{{ $course->created_at }}</span>
                            </li>
                        </ul>
                    </div>
                    </p>
                    <p class="">
                        {{-- Horizontal Ads --}}
                    <h2 class="h3">Category : {{ $course->catg }}</h2>
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


                </div>
                <div class="shadow p-2 text-center">
                    <!-- Display-Horizontal -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <a class="p-1 rounded border border-success m-2 bg-success text-white"
                        href="{{ $course->link }}">Click Here to
                        Enroll</a>
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
