<x-layout.main.base>
    <x-slot name='hero'>
        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <h2 class="h2">MCQs:</h2>
                    <div class="col-8">
                        <div class="title-single-box">

                            <div class="text-center">
                                <input class="form-control" type="text"
                                    placeholder="Please Enter: Question, Topic, Subject, Any Keyword ">
                            </div>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="etitle-single-box">
                            <div class="text-start pt-2">
                                <a href="" class="btn btn-success btn-md "><i class="fa fa-search"></i>
                                    Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- End Intro Single-->

    </x-slot>
    <br>
    <br>
    @foreach ($getHeading as $heading)
        <div class="row">
            <div class="col-1 text-end">
                <img width="40"
                    src="https://play-lh.googleusercontent.com/msNWaY_wN1bSfzmy0AAAK8Ek9XGVMV-RkjdO-GkPCd-pO9wJxVf8gZTToGxia4rtpFoc=w240-h480-rw"
                    alt="">
            </div>
            <div class="col-11 pt-1">
                <span style="border-bottom: 5px solid lightgreen;" class="h3">{{ $heading->name }}</h6>
            </div>
        </div>

        <br>
        <div class="row">
            @foreach ($heading->mcqHeading as $mcq)
                <div class="col-sm-4">
                    <a href="/Mcqs/{{ $heading->prama_link }}/{{ $mcq->prama_link }}">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-1"><i class="fa fa-eercast" aria-hidden="true"></i></div>
                            <div class="col-10 h5"> {{ $mcq->name }} Mcqs.</div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
        <br><br><br><br>
        @php
            $title = $heading->name;
            $pramalink = $heading->prama_link;
        @endphp

        <x-other.quizcard : title="{{ $title }}" pramalink="{{ $pramalink }}" />
    @endforeach
    <x-mocktest.listing />
</x-layout.main.base>
