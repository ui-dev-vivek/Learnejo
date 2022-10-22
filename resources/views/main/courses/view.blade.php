@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$course->title" :image="$course->image" :description="$course->title">

    <x-slot name='hero'>
        <br><br><br>
        {{-- <h1 class="container-fluid">{{ $course->title }}</h1> --}}
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="text-center">
                    <h1 class="container-fluid h1">{{ $course->title }}</h1>
                    <!-- Display-Square -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="7763649496" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <br>
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

                </div>
                <h2 class="h2">Category : {{ $course->catg }}</h2>
                </p>

                <p>
                    <?php
                    echo $course->content;
                    ?>
                </p>
                <!-- Display-Horizontal -->
                {{-- <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script> --}}
                <blockquote class="blockquote">
                    <p class="mb-4">{{ $course->title }} <br>
                        <small>The above course description is taken from <a href="https://udemy.com">Udemy</a>.</small>
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
                    <a class="p-1 rounded border border-success m-2 bg-success text-white"
                        href="{{ $course->link }}">Click Here to
                        Enroll</a>
                    <!-- Display-Horizontal -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </p>


            </div>
            <div class="col-md-3">
                <div class="">
                    <p class=" h5">
                        {{-- <a href="">
                        Give Mock Test For TCS, Wipro, Infosys,IBM, Deloitte & More MNC's.<br><small>Like Real
                            assment Test.</small></a> --}}
                    </p>
                    <hr>
                    <!-- Display-Vertical -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="1712412310" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div>
            </div>

        </div>
    </div>
    <p class="container">
        <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed"
            data-ad-client="ca-pub-7119514135532896" data-ad-slot="3004592505"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </p>
    @section('script')
        <script src="{{ asset('assets/ajax/enroll-now.js') }}"></script>
    @stop
</x-Layout.Main.Base>
