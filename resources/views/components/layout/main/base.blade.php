<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>{{ $title }}</title>
    <meta name="description" content="{{ $description }}" />
    <link rel="canonical" href="https://learnejo.com/" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ $title }}" />
    <meta property="og:description" content="{{ $description }}" />
    <meta property="og:url" content="https://learnejo.com/" />
    <meta property="og:site_name" content="Learnejo" />
    <meta property="article:published_time" content="" />
    <meta property="article:modified_time" content="" />
    <meta property="og:image" content="{{ $image }}" />
    <meta property="og:image:width" content="480" />
    <meta property="og:image:height" content="270" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:label1" content="Written by">
    <meta name="twitter:data1" content="Team Learnejo">
    <meta name="twitter:label2" content="Est. reading time">
    <meta name="twitter:data2" content="1 minute">
    <meta name="theme-color" content="#999999" />
    <!-- Favicons -->
    <link href="{{ asset('assets/image/icon.png') }}" rel="icon">
    <link href="{{ asset('assets/image/icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    {{-- mdb cdn --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    {{-- Other Cdns --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- Google Fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/mycss.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    @yield('css')

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-JDB4MKYCQ8"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-JDB4MKYCQ8');
    </script>
    <script async src="https://fundingchoicesmessages.google.com/i/pub-7119514135532896?ers=1"
        nonce="35KkKVqa_cZbnEduwFCzaw"></script>
    <script nonce="35KkKVqa_cZbnEduwFCzaw">
        (function() {
            function signalGooglefcPresent() {
                if (!window.frames['googlefcPresent']) {
                    if (document.body) {
                        const iframe = document.createElement('iframe');
                        iframe.style =
                            'width: 0; height: 0; border: none; z-index: -1000; left: -1000px; top: -1000px;';
                        iframe.style.display = 'none';
                        iframe.name = 'googlefcPresent';
                        document.body.appendChild(iframe);
                    } else {
                        setTimeout(signalGooglefcPresent, 0);
                    }
                }
            }
            signalGooglefcPresent();
        })();
    </script>

    {{-- <script src="https://checkout.razorpay.com/v1/checkout.js"></script> --}}

</head>

<body>
    <x-main.studentdashboard />
    <x-layout.main.navbar />
    <div>{{ $hero }}</div>
    <main id="main" class="container-fluid">
        {{ $slot }}
    </main>

    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    {{-- <button type="button" class="close" data-dismiss="modal" aria-label="Close"> --}}
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-title text-center">

                        <small><strong>Welcome Back! </strong></small>
                        <h4 class="h5 text-success">Please Continue With Google</h4>
                    </div>
                    <div class="d-flex flex-column text-center">
                        <div class="row">
                            <div class="col-3"></div>
                            <div class="col-6">

                                <a class=" h3 border border-info mt-4  m-2 rounded-8 p-2 btn" href="/auth/google">
                                    <img class="img-fluid" width="20"
                                        src="https://cdn.pixabay.com/photo/2015/10/31/12/56/google-1015752_960_720.png"
                                        alt=""> &nbsp;&nbsp;&nbsp;Sign With Google</a>
                            </div>
                            <div class="col-3"></div>
                        </div>
                        <br>
                        <small>it's simple to Sign in.'</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-main.preloader />
    <x-layout.main.footer />
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('assets/ajax/islogin.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/ajax/whatsapp-login.js') }}"></script>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
        crossorigin="anonymous"></script>
    @yield('script')
    <script>
        const settings = {
            "async": true,
            "crossDomain": true,
            "url": "https://www.google.co.in/search?q=best+car+insurance+in+united+states",
            "method": "GET",
            "headers": {}
        };

        $.ajax(settings).done(function(response) {
            console.log(response);
        });
    </script>

</body>

</html>
