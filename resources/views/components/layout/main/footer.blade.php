<!-- ======= Footer ======= -->
<footer id="footer" class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-5 col-md-12 footer-info">
                    <a href="{{ url('/') }}" class="logo d-flex align-items-center">
                        <img src="{{ asset('assets/image/logo-dark.png') }}" alt="">

                    </a>
                    <p>'Learnejo' is an E-learning platform, for every student interested and wishing to prepare for
                        Tech and non-Tech. This platform contains all the important topics and articles related to Tech
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
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/Contact-Us') }}">Contact us</a></li>
                        {{-- <li><i class="bi bi-chevron-right"></i> <a href="{{url('/Term-and-Conditions')}}">Terms of service</a></li> --}}
                    </ul>
                </div>

                <div class="col-lg-2 col-6 footer-links">
                    <h4>Our Services</h4>
                    <ul>
                        <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/Term-and-Conditions') }}">Terms and
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

    <div class="container">
        <div class="copyright">
            Copyright &copy; 2021 - {{ date('Y') }}<strong> <span>Learnejo</span></strong>. All Rights Reserved.
        </div>
    </div>
</footer>
<!-- End Footer -->
