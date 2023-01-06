@php
    $title = 'Learnejo:Blog';
    $image = asset('assets/image/icon.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">

@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <br><br><br>
    </x-slot>


    <div class="container-fluid">
        <div class="row">
            <div class="col-md-9">
                <section class="trending-blogs container">
                    <div class="row">
                        <div class="item col-xl-6 col-lg-6 col-12" data-aos="zoom-in" data-aos-delay="30">
                            <div data-tiltx class="blog-tile mb-4 border zoom ">
                                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                                    data-ad-slot="3842768123"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || [])
                                    .push({});
                                </script>
                            </div>
                        </div>

                        @foreach ($getBlogs as $blog)
                            <div class="item col-xl-6 col-lg-6 col-12 " data-aos="zoom-in" data-aos-delay="30">
                                <div data-tilt class="blog-tile mb-4 p-1 border zoomd  rounded bg-white">
                                    <a href="/Blogs/{{ $blog->prama_link }}" class="trending-blog-link"
                                        data-blog-title="{{ $blog->title }}">
                                        <div data-tiltc class="blog-featured-image img-div">
                                            <p class="top-right bg-primary p-1" style="font-size: 10px;">
                                            </p>
                                            {{-- <p class="bottom-left" style="font-size: 10px;">{{ $blog->catg }}</p> --}}
                                            <p class="bottom-right" style="font-size: 12px;"><span
                                                    class="bg-danger p-1">Blog</span>
                                            </p>
                                            <img src="{{ $blog->mobile_image }}" class="img-fluid blur-upf lazyloaded">
                                        </div>
                                        <article class="blog-info border-success p-2 text-center"
                                            style="min-height:200px">
                                            <h2 class="color-4a mt-2 h5"><b>{{ $blog->title }}</b></h2>

                                            {{-- <div class="p-2">
                                                <div class="row">
                                                    <div class="col">
                                                        <i class="fa fa-eye text-info"></i> 10
                                                    </div>
                                                    <div class="col">
                                                        <i class="fa fa-heart text-danger"></i> 20
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <p class="text-start"> <small class="text-justify text-dark text-start"
                                                    style="font-size: 12px;">{{ $blog->sort_desc }}</small></p>
                                        </article>
                                        <p class="text-end">
                                            <button class="btn btn-sm btn-outline-success">Read More..</button>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                        <div class="item col-xl-6 col-lg-6 col-12 " data-aos="zoom-in" data-aos-delay="30">
                            <div data-tiltx class="blog-tile mb-4 border zoom ">
                                <ins class="adsbygoogle" style="display:block" data-ad-format="fluid"
                                    data-ad-layout-key="-79+cw+2x-2h+5q" data-ad-client="ca-pub-7119514135532896"
                                    data-ad-slot="3842768123"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || [])
                                    .push({});
                                </script>
                            </div>
                        </div>
                    </div>
                    <x-main.pagination :data="$getBlogs" />
                </section>
            </div>
            <div class="col-md-3"><br><br>
                <div class="ms-1">
                    <h6 class="h5 text-center">Give Mock-Test for MNC's <br><br>
                        <p> <a class="p-1 border border-success rounded-8" href="{{ url('/Mock-Test') }}">Try
                                Now</a>
                        </p>
                        </h4>
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
    <div class="p-1">
        <ins class="adsbygoogle" style="display:block" data-ad-format="autorelaxed"
            data-ad-client="ca-pub-7119514135532896" data-ad-slot="3004592505"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>


</x-layout.main.base>
