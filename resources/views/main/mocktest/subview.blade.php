<x-Layout.Main.Base>
    <style>
        .ls-box {
            padding: 20px;
            border-radius: 20px;
            border: 1px solid #cac7c7;
            box-shadow: 0px 0px 20px 1px #cac7c7;
            background-color: #FFF;
        }

        /*new analytics page progress bar*/
        .preparations-section-bar .progress {
            height: 6px;
        }

        .preparations-section-bar .progress-bar {
            background: #3CB371;
        }

        .new-analytics-completion {
            line-height: 10px !important;
            text-align: center;
            float: right;
            margin-left: auto;
            order: 2;
            margin-bottom: 8px;
            margin-top: auto;
        }

        .new-analytics-completion span {
            font-size: 9px;
        }

        .new-analytics-completion small {
            font-size: 8px;
        }
    </style>
    <x-slot name='hero'>

        <section class="p-2 shadow ">
            <br><br><br>
            <div class=" container text-center p-2">

                <p style="font-size:70px; color:rgb(20, 16, 231);"><strong>{{ $getMockTest[0]->name }}</strong></p>
                <div class="row">
                    <div class="col-2 border-bottom p-1 border-success"> <i
                            class="fa fa-users rounded-circle p-2 bg-success text-white"></i>
                        <span class=""> Attempts : 34543</span>
                    </div>
                    <div class="col-2 border-bottom p-1 border-success"> <i
                            class="fa fa-list-alt rounded-circle border border-success p-2 bg-success text-white"></i>
                        Mock Tests : 34543</div>
                    <div class="col-2 border-bottom p-1 border-success"> <i
                            class="fa fa-code rounded-circle border border-success p-2 bg-success text-white"></i>
                        Coding : 34543</div>
                    <div class="col-2 border-bottom p-1 border-success"> <i
                            class="fa fa-book rounded-circle border border-success p-2 bg-success text-white"></i>
                        Solutions : 34543</div>
                    <div class="col-2 border-bottom p-1 border-success"> <i
                            class="fa fa-gg rounded-circle border border-success p-2 bg-success text-white"></i>
                        Quizs : 34543</div>
                    <div class="col-2 border-bottom p-1 border-success"> <i
                            class="fa fa-list-ul rounded-circle border border-success p-2 bg-success text-white"></i>
                        Mcqs : 34543</div>


                </div>

            </div>

        </section>
    </x-slot>
    <hr style="background:rgb(8, 219, 8);">
    <div class="text-center">
        <a class="btn btn-primary btn-block btn-md m-1" href="javascript:void(0)"
            onclick="syllabusShow();">{{ $getMockTest[0]->name }}
            Syllabus</a>
        <a class="btn btn-outline-primary btn-block btn-md m-1" href="javascript:void(0)">{{ $getMockTest[0]->name }}
            Mock Tests</a>

        <a class="btn btn-primary btn-block btn-md m-1" href="javascript:void(0)">{{ $getMockTest[0]->name }}
            Coading Test</a>

        <a class="btn btn-outline-primary btn-block btn-md m-1" href="javascript:void(0)"><i class="fa fa-gg"></i>
            &nbsp;{{ $getMockTest[0]->name }}
            Quiz</a>
        <a class="btn btn-primary btn-block btn-md m-1" href="javascript:void(0)"><i class="fa fa-list-ul"></i>
            &nbsp;{{ $getMockTest[0]->name }}
            Mcqs</a>
        <a class="btn btn-outline-primary btn-block m-1 btn-md" href="javascript:void(0)"><i class="fa fa-book"></i>
            &nbsp;{{ $getMockTest[0]->name }}
            Solution</a>

    </div>

    <div id="syllabus" class="p-1 d-none">
        <hr>
        <h4>TCS NQT:</h4>
        <p><strong>This year TCS NQT Pattern is completely changed.</strong> TCS NQT Written Test Questions
            pattern-based practice problems are available on the PrepInsta website. You may want to go through all the
            sections before you start writing the exam.<strong>Test Pattern</strong> has been changed for the TCS NQT
            Test as some sections have been replaced with the new sections.</p>
        <p>We have done every bit of research and analysis for TCS NQT Placement papers and Questions 2022 here. TCS NQT
            Previous Papers and Sample Papers show us that the exam is of high difficulty for all branches.</p>
        <p><strong>TCS NQT will use TCS iON platform for the 1st round of the exam, below are the syllabus
                details</strong>:</p>
        <div class="table-grey">
            <table class="table">
                <tbody>
                    <tr>
                        <td>Sections</td>
                        <td>Questions</td>
                    </tr>
                    <tr>
                        <td>Numerical Ability</td>
                        <td>26 Qs , 40 mins</td>
                    </tr>
                    <tr>
                        <td>Verbal Ability</td>
                        <td>24 Qs, 30 mins</td>
                    </tr>
                    <tr>
                        <td>Reasoning Ability</td>
                        <td>30 Qs, 50 mins</td>
                    </tr>
                    <tr>
                        <td>Programming MCQ</td>
                        <td> 10 Qs, 15 mins</td>
                    </tr>
                    <tr>
                        <td>Coding Test</td>
                        <td>2 Qs, 45 mins</td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>



    <section class="container">
        <h2>Mock Test:</h2> <br>
        <div class="row">
            @forelse ($getMockTest[0]->mockTestSubTopic as $topic)
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="30">
                    <a href="{{ url('/Mock-Test') }}/{{ $getMockTest[0]->prama_link }}/{{ $topic->prama_link }}">
                        <div class="ls-box  " style="border-radius:10px;">

                            <div class="preparations-section-bar mb-2">
                                <div class="row">
                                    <div class="col-10 ps-4"> <a
                                            href="{{ url('/Mock-Test') }}/{{ $getMockTest[0]->prama_link }}/{{ $topic->prama_link }}">

                                            <h4> <strong>{{ $topic->name }}</strong></h4>
                                        </a> </div>
                                    <div class="col-2">
                                        <div class="flex">
                                            <p class="new-analytics-completion"><span
                                                    class="mont-bold">0/100%</span><br><small>Completed</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-center">
                                        <i class="fa text-success fa-3x fa-bolt" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-11 text-end mt-3 ">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <small>
                                <div class="row">
                                    <div class="col-3 text-center"><strong>Total:</strong></div>
                                    <div class="col-3 text-center">10 Test</div>
                                    <div class="col-3 text-center">20 Min</div>
                                    <div class="col-3 text-center">700 point</div>
                                </div>
                            </small>

                        </div>
                    </a>
                </div>


            @empty
                <div>
                    <h3>There are no any Mock Test</h3>
                </div>
            @endforelse
        </div>
    </section>

    <section class="container">
        <h2>Coding Questions:</h2> <br>
        <div class="row">
            @forelse ($getMockTest[0]->mockTestSubTopic as $topic)
                <div class="col-md-4 mb-3" data-aos="zoom-in" data-aos-delay="30">
                    <a href="{{ url('/Mock-Test') }}/{{ $getMockTest[0]->prama_link }}/{{ $topic->prama_link }}">
                        <div class="ls-box  " style="border-radius:10px;">

                            <div class="preparations-section-bar mb-2">
                                <div class="row">
                                    <div class="col-10 ps-4"> <a data-bs-toggle="modal"
                                            data-bs-target="#modelId{{ $topic->id }}" href="javascript:void(0);">

                                            <h4> <strong>{{ $topic->name }}</strong></h4>
                                        </a> </div>
                                    <div class="col-2">
                                        <div class="flex">
                                            <p class="new-analytics-completion"><span
                                                    class="mont-bold">0/100%</span><br><small>Completed</small></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-1 text-center">
                                        <i class="fa text-success fa-3x fa-bolt" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-11 text-end mt-3 ">
                                        <div class="progress">
                                            <div class="progress-bar" role="progressbar" style="width: 23%;"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <small>
                                <div class="row">
                                    <div class="col-3 text-center"><strong>Total:</strong></div>
                                    <div class="col-3 text-center">10 Test</div>
                                    <div class="col-3 text-center">20 Min</div>
                                    <div class="col-3 text-center">700 point</div>
                                </div>
                            </small>

                        </div>
                    </a>
                </div>
                <!-- Modal -->
                <div class="modal fade" id="modelId{{ $topic->id }}" tabindex="-1" role="dialog"
                    aria-labelledby="modelTitleId{{ $topic->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-dialog-centered modal-dialog-scrollable"
                        role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">
                                    <h2>{{ $topic->name }}</h2>
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                                <div class="shadow m-1 ps-3 p-2 border border-success rounded">
                                    <div class="row">
                                        <div class="col-9">

                                            Aptitude Set 1. <span></span>

                                        </div>
                                        <div class="col-3 text-center"><a href=""
                                                class="btn btn-sm btn-my-sm btn-primary">Start</a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-sm btn-secondary"
                                    data-bs-dismiss="modal">Close</button>

                            </div>
                        </div>
                    </div>
                </div>


            @empty
                <div>
                    <h3>There are no any Mock Test</h3>
                </div>
            @endforelse
        </div>
    </section>





</x-Layout.Main.Base>
