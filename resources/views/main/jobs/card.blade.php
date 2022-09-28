<x-layout.main.base :title="$job->title" :image="$job->image" :description="$job->title">
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
            <!-- 160pxcode -->
            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
        <div class="col-md-8">
            <div class="rounded-8 p-3 shadow z-depth-3">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="p-2">
                            <img class="img-fluid rounded-8" src="{{ $job->image }}" alt="">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="p-3">
                            <h5 class="h5">{{ $job->title }}</h5>
                            <div class="row">

                                <div class="col-6 p-1 text-white text-center"><strong>Jobs Update</strong></div>
                                <div class="row  text-dark">
                                    <div class="col-6 overflow-hidden">
                                        <span class="overflow-hidden"> <small><i class="fa fa-building-o"
                                                    aria-hidden="true"></i>&nbsp;
                                                &nbsp;{{ $job->company }}</small></span><br>
                                        <span class="overflow-hidden"> <small><i class="fa fa-user-plus"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                {{ $job->role }}</small></span>
                                    </div>
                                    <div class="col-6 ">
                                        <span class="overflow-hidden"><small><i class="fa fa-briefcase"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                {{ $job->experience }}</small></span><br>
                                        <span class="overflow-hidden"> <small><i class="fa fa-money"
                                                    aria-hidden="true"></i>&nbsp;&nbsp;
                                                {{ $job->salary }}</small></span>
                                    </div>
                                </div>
                                <div">
                                    <!-- 160pxcode -->
                                    <ins class="adsbygoogle" style="display:block; max-height:150px;"
                                        data-ad-client="ca-pub-7119514135532896" data-ad-slot="2100620665"
                                        data-ad-format="auto" data-full-width-responsive="true"></ins>
                                    <script>
                                        (adsbygoogle = window.adsbygoogle || []).push({});
                                    </script>
                            </div>
                            <p class="text-end mt-2"><a
                                    class="p-2 bg-primary rounded text-white hvr-icon-wobble-horizontal"
                                    href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}"><strong>Apply Now
                                    </strong>
                                    <i class="fa fa-arrow-right hvr-icon" aria-hidden="true"> </i> </a></p>
                        </div>
                    </div>
                </div>
            </div>
            </a> <br><a href="https://telegram.me/job_learnejo">
                <h5 class="h5 text-succes text-center"> <i class="fa fa-telegram " aria-hidden="true"></i>Join Us On
                    Telegram</h5>
            </a>
        </div> <br>
        <div class="rounded-8 p-3 shadow z-depth-3">
            <h5 class="h5 mb-2">Other Jobs-Internships:</h5>
            @forelse ($jobx as $job)
                <div class="shadow mb-2 p-2 ps-3 shadow rounded z-depth-1 zoom-x" style="width: 100%;">
                    <a href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}">
                        <h6 class="h6">{{ $job->title }}</h6>
                    </a>
                </div>
            @empty
                <p>No Courses Found!</p>
            @endforelse

            <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>

    </div>
    <div class="col-md-2">
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
            data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
    </div>

</x-layout.main.base>
