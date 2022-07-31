@php
$title = 'Learnejo:Contact Us';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <section class="breadcrumbs">
            <div class="container">
                <h1 class="text-center">Contect Us</h1>

            </div>
        </section><!-- End Breadcrumbs -->
    </x-slot>
    <br>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <!--div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div-->

        <div class="container" data-aos="fade-up">

            <div class="row mt-5">

                <div class="col-lg-4">
                    <div class="info">
                        <div class="address">
                            <i class="fa fa-globe"></i>
                            <h4>Location:</h4>
                            <p>Learnejo: E-learning Platform (Online)</p>
                        </div>

                        <div class="email">
                            <i class="fa fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>learnejo@gmail.com</p>
                        </div>

                        <div class="phone">
                            <i class="fa fa-phone"></i>
                            <h4>Call:</h4>
                            <p>+91 9795033028</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form class="php-email-form" id="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input id="email" type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input id="subject" type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea id="massage" class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message">cd</div>
                            <div class="sent-message"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send
                                Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section><!-- End Contact Section -->

</x-layout.main.base>
