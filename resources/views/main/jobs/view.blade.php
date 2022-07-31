<x-layout.main.base :title="$job->title" :image="$job->image" :description="$job->title">
    <x-slot name='hero'>
        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-8">
                        <div class="title-single-box">
                            <div class="section-title ">
                                <p class="title-single">{{ $job->title }}</p>
                                <span>Job</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->
    </x-slot>
    <section class="news-single nav-arrow-b  text-justify">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="news-img-box text-center">
                        <img src="{{ $job->image }}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2">
                    <div class="post-information">
                        <ul class="list-inline text-center color-a">
                            <li class="list-inline-item mr-2">
                                <b>Author: </b>
                                <span class="color-text-a">Team Learnejo</span>
                            </li>
                            <li class="list-inline-item mr-2">
                                <b>Category: </b>
                                <span class="color-text-a">Travel</span>
                            </li>
                            <li class="list-inline-item mr-2">
                                <b>Views: </b>
                                <span class="color-text-a"></span>
                            </li>
                            <li class="list-inline-item">
                                <strong>Date: </strong>
                                <span class="color-text-a">{{ $job->created_at }}</span>
                            </li>
                        </ul>
                    </div>
                    <div class="post-content color-text-a">
                        <p class="post-intro">
                        <h2 class="h2">{{ $job->title }}</h2>
                        </p>

                        <p>
                            <?php
                            echo $job->content;
                            ?>
                        </p>
                        <blockquote class="blockquote">
                            <p class="mb-4">{{ $job->title }} <br>
                                <small></small>
                            </p>
                            <footer class="blockquote-footer">
                                <strong>Developer</strong>
                                <cite title="Source Title">Learnejo</cite>
                            </footer>
                        </blockquote>
                        <div class="text-center">
                            <a class="btn btn-md btn-info" href="javascript:void(0);"
                                onclick="apply('{{ $job->prama_link }}','{{ $job->link }}','{{ csrf_token() }}');"><span
                                    class="apply">Apply
                                    Now </span></a>
                        </div>
                    </div>
                    <br>
                    <div class="post-footer">
                        <div class="post-share">
                            <span>Share: </span>
                            <ul class="list-inline socials">
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-facebook" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-twitter" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-instagram" aria-hidden="true"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <br>

        </div>
        </div>
    </section><!-- End Blog Single-->


</x-Layout.Main.Base>