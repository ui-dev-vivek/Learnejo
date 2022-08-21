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
    <div class=" p-2">
        <div class="row">
            <div class="col-sm-8 p-2">
                <p class="small text-center"><b>Technical</b></p>
                <hr>
                <div class="row">

                    @foreach ($getTechMcqs as $mcq)
                        <div class="col-sm-6">

                            <a href="/Mcqs/{{ $mcq->prama_link }}">
                                <div class="row">
                                    <div class="col-1"><i class="fa fa-eercast" aria-hidden="true"></i></div>
                                    <div class="col-9"> {{ $mcq->name }} Mcqs.</div>
                                </div>


                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
            <div class="col-sm-4 p-2">
                <p class="small text-center"><b>Non-Technical</b></p>
                <hr>
                <div class="row">

                    @foreach ($getNonTechMcqs as $mcq)
                        <div class="col-sm-12">

                            <a href="/Mcqs/{{ $mcq->prama_link }}">
                                <div class="row">
                                    <div class="col-1"><i class="fa fa-eercast" aria-hidden="true"></i></div>
                                    <div class="col-9"> {{ $mcq->name }} Mcqs.</div>
                                </div>


                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
    <br>
    <hr>
    <div class="row">
        @foreach ($getTechMcqs as $mcq)
            <div class="col-sm-4 p-1">

                <div class="row">
                    <div class="col-1 text-end">
                        <img width="30"
                            src="https://play-lh.googleusercontent.com/msNWaY_wN1bSfzmy0AAAK8Ek9XGVMV-RkjdO-GkPCd-pO9wJxVf8gZTToGxia4rtpFoc=w240-h480-rw"
                            alt="">
                    </div>
                    <div class="col-11 pt-1">
                        <h4 class="h4">{{ $mcq->name }}</h6>
                    </div>
                </div>
                @foreach ($mcq->mcqSubTopic as $subtopic)
                    <a href="/Mcqs/{{ $subtopic->prama_link }}">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-1"><i class="fa fa-eercast" aria-hidden="true"></i></div>
                            <div class="col-10"> {{ $subtopic->name }} Mcqs.</div>
                        </div>
                    </a>
                @endforeach


            </div>
        @endforeach

    </div>
    <br>
    <div class="row">
        @foreach ($getNonTechMcqs as $mcq)
            <div class="col-sm-4 p-1">

                <div class="row">
                    <div class="col-1 text-end">
                        <img width="30"
                            src="https://play-lh.googleusercontent.com/msNWaY_wN1bSfzmy0AAAK8Ek9XGVMV-RkjdO-GkPCd-pO9wJxVf8gZTToGxia4rtpFoc=w240-h480-rw"
                            alt="">
                    </div>
                    <div class="col-11 pt-1">
                        <h4 class="h4">{{ $mcq->name }}</h6>
                    </div>
                </div>
                @foreach ($mcq->mcqSubTopic as $subtopic)
                    <a href="/Mcqs/{{ $subtopic->prama_link }}">
                        <div class="row">
                            <div class="col-1"></div>
                            <div class="col-1"><i class="fa fa-eercast" aria-hidden="true"></i></div>
                            <div class="col-10"> {{ $subtopic->name }} Mcqs.</div>
                        </div>
                    </a>
                @endforeach


            </div>
        @endforeach

    </div>
    <x-mocktest.listing />
</x-layout.main.base>
