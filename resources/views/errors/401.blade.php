@php
$title = '401 Error';
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
                <h1>401 Unauthorised!</h1>
                <hr>
                <strong><small>The HyperText Transfer Protocol (HTTP) 401 Unauthorized response status code indicates
                        that the client request has not been completed because it lacks valid authentication credentials
                        for the requested resource.
                    </small></strong><br>
                <strong><i>How to Fix this.</i></strong>
                1. Check the URL. <br>
                2. Clean your firewall and browser cache.<br>
                3. Log out and log in again.<br>
                4. Disable your plugins or theme.<br>
                5. Flush your DNS records.<br>
                6. Reload the page.<br>
                7. Check with your hosting provider.<br>
                8. <b class="text-success">Come back later.</b>


            </div>
            <div class="col-sm">
                <div class="text-center rounded">
                    <video class="rounded-8 img-fluid" src="{{ asset('video/intro.mp4') }}" autoplay muted loop></video>
                </div>
            </div>
        </div>
    </div>
</x-layout.main.base>
