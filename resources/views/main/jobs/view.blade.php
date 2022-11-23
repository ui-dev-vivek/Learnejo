<x-layout.main.base :title="$job->title" :image="$job->image" :description="$job->title">
    <x-slot name='hero'>
        <!-- ======= Intro Single ======= -->
        {{-- <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <div class="section-title ">
                                <p class="title-single">{{ $job->title }}</p>
                                <span>Job</span>
                            </div>
                        </div>
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                            data-ad-slot="8356744114" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                    </div>
                </div>
            </div>
            </div>
        </section><!-- End Intro Single--> --}}
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
                    <h1 class="h2">{{ $job->title }}</h1>
                    <div class="post-information">
                        <ul class="list-inline text-center color-a">
                            <li class="list-inline-item mr-2">
                                <b>Author: </b>
                                <span class="color-text-a">Team Learnejo</span>
                            </li>
                            <li class="list-inline-item mr-2">
                                <b>Category: </b>
                                <span class="color-text-a">{{ $job->type }}</span>
                            </li>
                            <li class="list-inline-item mr-2">
                                <b>Views: </b>
                                <span class="color-text-a">{{ $job->view }}</span>
                            </li>
                            <li class="list-inline-item">
                                <strong>Date: </strong>
                                <span class="color-text-a">{{ $job->created_at }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="p-2">
                        <div
                            style="position: relative; width: 100%; height: 0; padding-top: 33.3333%;
 padding-bottom: 0; box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); margin-top: 1.6em; margin-bottom: 0.9em; overflow: hidden;
 border-radius: 8px; will-change: transform;">
                            <iframe loading="lazy"
                                style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; border: none; padding: 0;margin: 0;"
                                src="https:&#x2F;&#x2F;www.canva.com&#x2F;design&#x2F;DAFQzNFKre0&#x2F;view?embed"
                                allowfullscreen="allowfullscreen" allow="fullscreen">
                            </iframe>
                        </div>

                    </div>
                    </p>
                    <p class="text-center">
                        {{-- Horizontal Ads --}}
                    </p>
                    <p>
                        <?php
                        echo $job->content;
                        ?>
                    </p>
                    <blockquote class="blockquote">
                        <p class="mb-4">{{ $job->title }} <br>
                            <small></small>
                        </p>
                        <footer class="blockquote-footer">
                            <strong>Developer</strong>
                            <cite title="Source Title">Learnejo</cite>
                        </footer>
                    </blockquote>
                    <p class="text-center">
                        <!-- Display-Horizontal -->
                        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                            data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                        <script>
                            (adsbygoogle = window.adsbygoogle || []).push({});
                        </script>
                        <a class="btn btn-md btn-info" href="{{ $job->link }}">Click Here To Apply </a>
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
                    
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="1712412310" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </div> --}}

            </div>
        </div>

    </div>
    @section('script')
        <script src="{{ asset('assets/ajax/apply-now.js') }}"></script>
    @stop

</x-layout.main.base>
