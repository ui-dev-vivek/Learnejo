@php
    $title = 'Learnejo:About Us';
    $image = asset('assets/image/About.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <section class="breadcrumbs" data-aos="fade-up">
            <div class="container">
                <h1 class="text-center">About Us</h1>

            </div>
        </section><!-- End Breadcrumbs -->
    </x-slot>
    <br>
    <div class="container">
        <small data-aos="fade-up">https://learnejo.com/</small>
        <p style=" text-align: justify;" data-aos="fade-up" data-aos-delay="100">'Learnejo' is an <b>E-learning
                platform</b>,
            for every student interested and
            wishing
            to prepare for <b>Technical</b> and <b>NON-Technical</b>. This platform contains all the important topics
            and
            articles related to<b>Technical</b> and <b>NON-Technical</b>. With the help of this, you can enhance your
            skills
            and knowledge as well as enhance your career.</p>
        <p style=" text-align: justify;" data-aos="fade-up" data-aos-delay="200">learnejo : generally means
            <b>'Pathashala'</b>. In ancient times, education was
            taken through Gurukul. <br> Where not only intellectual but also social and classical knowledge was acquired
            in
            a pure environment. After that, the motivation to acquire knowledge started increasing, so Pathashala
            started
            being established at different places.<br> Today is the age of the Internet, the technical development is at
            a
            proper level. So ours and your <b>Pathshala (Learnejo) </b> also on the internet now. Just as a student won
            the
            battle by becoming a warrior after taking complete education in ancient times, in the same way, you will
            also
            win
            the <b> Battle of your Career successfully</b>.
        </p>
    </div>
    <!-- ======= Features Section ======= -->
    <section id="features" class="features" style="padding-top:-200px;">
        <div class="container" data-aos="fade-up">
            <div class="row feature-icons" data-aos="fade-up">
                <h3>Our Features </h3>




                <div class="col-xl-12 d-flex content">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6 icon-box" data-aos="fade-up">
                            <i class="bi bi-phone"></i>
                            <div>
                                <h4>Free Courses</h4>
                                <p>We provide free courses which are udemy certified. For all tech Stream.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                            <i class="bi bi-journal-richtext"></i>
                            <div>
                                <h4>Free Notes</h4>
                                <p>We provide free notes for all tech and non-tech strems.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                            <i class="bi bi-display"></i>
                            <div>
                                <h4>Mock Test</h4>
                                <p>We conduct mock tests which are based on the examinations of ITs companies like
                                    TCS, Wipro, Infosys and government jobs.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-card-checklist"></i>
                            <div>
                                <h4>MCQs & Quiz</h4>
                                <p>We provide MCQs and Quizzes which play a vital role in your preparation.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-person-workspace"></i>
                            <div>
                                <h4>Job Updates</h4>
                                <p>We reach you the updates of all types of jobs so that you do not miss any
                                    opportunities.</p>
                            </div>
                        </div>

                        <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-briefcase"></i>
                            <div>
                                <h4>Career Elements</h4>
                                <p>We will provide all such things which will be useful in making your career
                                    successful.</p>
                            </div>
                        </div>

                    </div>




                </div><!-- End Feature Icons -->

            </div>

    </section><!-- End Features Section -->
</x-layout.main.base>
