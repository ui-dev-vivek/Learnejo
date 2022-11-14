@php
    $title = 'Pricing Plan';
    $image = asset('assets/image/icon.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <section class="breadcrumbs" data-aos="fade-up">
            <div class="container">
                <h1 class="text-center">Pricing Plan</h1>

            </div>
        </section><!-- End Breadcrumbs -->
    </x-slot>
    <br><br>
    <div class="container text-justify">
        <h1 class="h1 text-center"><span class="text-danger">Live</span> <span class="text-success">Online</span> Classes
        </h1>
        <hr>
        <div class="row">
            <div class="col-md-4" data-aos="fade-down">
                <div class="shadow rounded-8 p-2 border">
                    <div class="border-warning">
                        <div>
                            <img class="img-fluid rounded-top" width="500"
                                src="{{ asset('assets/image/python-pricing.png') }}">
                        </div>
                        <br>
                        <ul>
                            <ol><i class="fa fa-check text-success"> </i> <span class="text-danger">Live</span> Online
                                Classes</ol>
                            <ol><i class="fa fa-check text-success"> </i> <span class="text-success">Interactive</span>
                                classes</ol>
                            <br>
                            <ol><i class="fa fa-eercast text-warning"> </i> Introduction, Installation.</ol>
                            <ol><i class="fa fa-eercast text-warning"> </i> Data Types, Variables.</ol>
                            <ol><i class="fa fa-eercast text-warning"> </i> Operators.</ol>
                            <ol><i class="fa fa-eercast text-warning"> </i> Loops
                                Looping Techniques.</ol>
                            <ol><i class="fa fa-eercast text-warning"> </i> Control Statments.</ol>
                            <ol><i class="fa fa-eercast text-warning"> </i> List, Tuples,
                                Dictionary, Set.</ol>
                            <ol><i class="fa fa-eercast text-warning"> </i> Functions,Lembda.</ol>
                            <ol><i class="fa fa-eercast text-warning"> </i> File Handling.</ol>

                        </ul>

                        <br>
                        <div class="p-2 bg-warning rounded-bottom">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="text-white text-center">
                                        Rs. 199
                                    </h3>
                                </div>
                                <div class="col-4">
                                    <button
                                        class="p-1 ps-2 pe-2 shadow border border-warning text-warning rounded-8">Enroll
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down">
                <div class="shadow rounded-8 p-2 border">
                    <div class="border-info">
                        <div>
                            <img class="img-fluid rounded-top" width="500"
                                src="{{ asset('assets/image/wd-pricing.png') }}">
                        </div>
                        <br>
                        <ul>
                            <ol><i class="fa fa-check text-success"> </i> <span class="text-danger">Live</span> Online
                                Classes</ol>
                            <ol><i class="fa fa-check text-success"> </i> <span class="text-success">Interactive</span>
                                classes</ol><br>
                            <ol><i class="fa fa-eercast text-info"> </i> Html:5</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> CSS</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Bootstrap</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> JavaScript, Jquery</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Python,Flask Freamwork</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Ajax</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> SQLlite</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Deploy On Heroku</ol>
                        </ul>
                        <br>
                        <div class="p-2 bg-info rounded-bottom">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="text-white text-center">
                                        Rs. 249
                                    </h3>
                                </div>
                                <div class="col-4">
                                    <button class="p-1 ps-2 pe-2 shadow border border-info text-info rounded-8">Enroll
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down">
                <div class="shadow rounded-8 p-2 border">
                    <div class="border-success">

                        <div class="">
                            <img class="img-fluid rounded-top" width="500"
                                src="{{ asset('assets/image/laravel-pricing.png') }}">
                        </div>
                        <br>
                        <ul>
                            <ol><i class="fa fa-check text-success"> </i> <span class="text-danger">Live</span> Online
                                Classes</ol>
                            <ol><i class="fa fa-check text-success"> </i> <span class="text-success">Interactive</span>
                                classes</ol><br>
                            <ol><i class="fa fa-eercast text-info"> </i> Bootstrap</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Laravel Inrtoduction</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Controller, View</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Layouts</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Components</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Model</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Migration</ol>
                            <ol><i class="fa fa-eercast text-info"> </i> Deploy On c Panel</ol>
                        </ul>
                        <br>
                        <div class="p-2 bg-success rounded-bottom">
                            <div class="row">
                                <div class="col-8">
                                    <h3 class="text-white text-center">
                                        Rs. 299
                                    </h3>
                                </div>
                                <div class="col-4">
                                    <button
                                        class="p-1 ps-2 pe-2 shadow border border-success text-success rounded-8">Enroll
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.main.base>
