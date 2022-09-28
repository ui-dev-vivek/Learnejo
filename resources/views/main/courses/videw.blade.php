<!doctype html>
<html lang="en">

<head>
    <title>{{ $course->title }}</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
        crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <section class="p-2">
            <h1>{{ $course->title }}</h1>
        </section>

    </header>
    <main class="container-fluid">
        <div class="row">
            <div class="col-sm-8">
                <section class="text-center p-3">
                    <img class="shadow z-depth-3" src="{{ $course->image }}" alt="" class="img-fluid">
                </section>
                <hr>
                <section p-3>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                        crossorigin="anonymous"></script>
                    <!-- 160pxcode -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <p>
                        @php
                            echo $course->content;
                        @endphp

                    </p>
                </section>
                <section class="text-center">
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                        crossorigin="anonymous"></script>
                    <!-- 160pxcode -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                    <a class="btn btn-info p-2" href="{{ $course->link }}">Enroll Now</a>
                    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                        crossorigin="anonymous"></script>
                    <!-- 160pxcode -->
                    <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || []).push({});
                    </script>
                </section>
            </div>
            <div class="col-sm-4">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                    crossorigin="anonymous"></script>
                <!-- 160pxcode -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
                View More>>
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
                    crossorigin="anonymous"></script>
                <!-- 160pxcode -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7119514135532896"
            crossorigin="anonymous"></script>
        <!-- 160pxcode -->
        <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
            data-ad-slot="2100620665" data-ad-format="auto" data-full-width-responsive="true"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </main>
    <hr>
    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                            {{-- <img src="{{ asset('assets/image/logo-dark.png') }}" alt=""> --}}

                        </a>
                        <p>'Learnejo' is an E-learning platform, for every student interested and wishing to prepare for
                            Tech and non-Tech. This platform contains all the important topics and articles related to
                            Tech
                            and Non-Tech. With the help of this, you can enhance your skills and knowledge as well as
                            enhance your career.</p>
                        <div class="social-links mt-3">
                            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="/">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/About-Us') }}">About us</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/Contact-Us') }}">Contact us</a>
                            </li>
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="{{url('/Term-and-Conditions')}}">Terms of service</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/Term-and-Conditions') }}">Terms
                                    and
                                    Conditions</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/Privacy-Policy') }}">Privacy
                                    policy</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a
                                    href="{{ url('/Refund-Cancellations') }}">Refund/Cancellations</a></li>
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="">Web Development</a></li> --}}
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Product Management</a></li> --}}
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Marketing</a></li> --}}
                            {{-- <li><i class="bi bi-chevron-right"></i> <a href="#">Graphic Design</a></li> --}}
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <h4>Contact Us</h4>
                        <p>

                            <b>Learnejo</b><br>
                            <strong>Platform:</strong> E-Learning (Online)<br>
                            <strong>Phone:</strong> +91-9795033028<br>
                            <strong>Email:</strong> info@learnejo.com<br>

                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid p-2 bg-success text-white text-center">
            <div class="copyright">
                Copyright &copy; 2021 - {{ date('Y') }}<strong> <span>Learnejo</span></strong>. All Rights
                Reserved.
            </div>
        </div>
    </footer>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
        integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
        integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
    </script>
</body>

</html>
