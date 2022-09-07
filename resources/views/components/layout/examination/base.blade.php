<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Examination Login</title>
    <!-- Favicons -->
    <link href="{{ asset('assets/image/icon.png') }}" rel="icon">
    <link href="{{ asset('assets/image/icon.png') }}" rel="apple-touch-icon">
    {{-- Bootstrap --}}
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    {{-- MDBootstrap --}}
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    {{-- Fontawesom --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/timercircle.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/hover.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/video.css') }}" rel="stylesheet">
    {{-- Google Adseens --}}
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
        crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-9B3E55GBMC"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-9B3E55GBMC');
    </script>


</head>

<body>

    <x-layout.examination.navbar />

    <main id="main">
        <div class="container-fluid">
            {{ $slot }}
        </div>
    </main>
    <div id="preloader"></div>
    {{-- <x-layout.examination.footer /> --}}
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    {{-- <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script> --}}
    {{-- <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script> --}}
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/tilt.js/1.2.1/tilt.jquery.min.js"></script> --}}
    {{-- <script type="text/javascript" src="https://unpkg.com/tilt.js@1.2.1/dest/tilt.jquery.min.js"></script> --}}
    @yield('script')
    <!-- Template Main JS File -->
    {{-- <script src="{{ asset('faceapi/face-api.min.js') }}"></script> --}}
    <script src="{{ asset('assets/js/main.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/other.js') }}"></script> --}}
    <script src="{{ asset('assets/js/mock_test.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/ajax.js') }}"></script> --}}
    <script src="{{ asset('assets/js/examination.js') }}"></script>
    {{-- <script src="{{ asset('assets/js/camara.js') }}"></script> --}}
    <script src="{{ asset('assets/js/examinationajax.js') }}"></script>


</body>

</html>
