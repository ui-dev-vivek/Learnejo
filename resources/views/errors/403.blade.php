@php
$title = '403 Error';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        {{-- <div class="title-single-box">
                             <div class="section-title ">
                                <p class="title-single">500 Server Error!</p>
                                <small>WE Working On It.</small>
                                <span>500</span>
                            </div> 
                    </div> --}}
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1>403 Forbidden Error!</h1>
                <hr>
                <strong><small>The 403 Forbidden error appears when your server denies you permission to access a page
                        on your site. This is mainly caused by a faulty security plugin, a corrupt . htaccess file, or
                        incorrect file permissions on your server.</small></strong><br>
                <strong><i>How to Fix This.</i></strong><br>
                1. Reload the web page. <br>
                2. Clear your browser's cache. <br>
                3. Delete your browser's cookies.<br>
                4. Contact to Website Developer.<br>
                5. Contacting the website is another option.<br>
                6. <b class="text-success">Come back later.</b>


            </div>
            <div class="col-sm"><br><br><br>
                <div class="text-center rounded">
                    <video class="rounded-8 img-fluid" src="{{ asset('video/intro.mp4') }}" autoplay muted loop></video>
                </div>
            </div>
        </div>
    </div>
</x-layout.main.base>
