@php
    $title = 'Examination : Mock Test';
    $image = asset('assets/image/icon.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
@endphp
<x-layout.examination.base :title="$title" :image="$image" :description="$description">
    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
        <script src="{{ asset('assets/js/examination-page.js') }}"></script>


    @stop
    <style>
        body {
            margin: 0 !important;
            padding: 0 !important;
            /* background: rgb(244, 241, 241); */
            /* color: white; */
        }

        .facex {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        div.fixedx {
            position: fixed;
            top: 10vh;
            right: 0;
            width: 300px;

        }

        .fixedxx {
            position: fixed;
            width: 40vh;
            bottom: 20px;
            margin-left: 5vh;
        }

        .mainx {
            width: calc(100% - 50vh);
            top: 10vh;
            left: 0;
            position: absolute;

        }

        canvas {
            position: absolute;
        }

        .sidexx {
            position: absolute;
            right: 0;
            width: 50vh;
            height: 10vh;

        }


        ul li {
            display: block;
            position: relative;
            float: left;
            width: 100%;
            /* height: 100px; */
            /* border-bottom: 1px solid #333; */
        }

        ul li input[type=radio] {
            position: absolute;
            visibility: hidden;
        }

        ul li label {
            display: block;
            position: relative;
            /* font-weight: 300; */
            /* font-size: 1.35em; */
            padding-left: 60px;
            /* margin: 10px auto; */
            min-height: 30px;
            /* z-index: 9; */
            cursor: pointer;
            /* -webkit-transition: all 0.25s linear; */
        }

        ul li:hover label {
            color: #32c552;


        }

        ul li .check {
            display: block;
            position: absolute;
            border: 5px solid #AAAAAA;
            border-radius: 100%;
            height: 25px;
            width: 25px;
            top: 6px;
            left: 20px;
            z-index: 5;
            /* transition: border .15s linear; */
            /* -webkit-transition: border .15s linear; */
        }

        ul li:hover .check {
            border: 5px solid #32c552;
        }

        ul li .check::before {
            display: block;
            position: absolute;
            content: '';
            border-radius: 100%;
            height: 11px;
            width: 11px;
            top: 2px;
            left: 2px;
            margin: auto;
            /* transition: background 0.15s linear; */
            /* -webkit-transition: background 0.15s linear; */
        }

        input[type=radio]:checked~.check {
            border: 5px solid #32c552;
        }

        input[type=radio]:checked~.check::before {
            background: #32c552;
        }

        input[type=radio]:checked~label {
            color: #32c552;
        }
    </style>


    <div class=" mainx" style="height:90vh; ">
        <div class="ps-3 pt-1 border-bottom border-primary">
            <h6 class="h6">Section: <a class="bg-primary text-white rounded p-1" href="javascript:void(0)">Aptitude
                    <i class="fa fa-info-circle" aria-hidden="true"></i></a> &nbsp;<a
                    class="bg-primary text-white rounded p-1" href="javascript:void(0)"
                    onclick="alert('Not Allow!');">Coding <i class="fa fa-info-circle" aria-hidden="true"></i> </a>
            </h6>
        </div>


        <div class="p-5 scroll-v ">

            @forelse ($getQuestions as $question)
                <div class="d-none">
                    <div class="row">
                        <div class="col-1">
                            <p><b>Que {{ $loop->iteration }}: </b></p>
                        </div>
                        <div class="col-11 border-bottom text-primary">
                            <p> <b>{{ $question->question }}</b></p>
                        </div>
                    </div>
                    <div>
                        <ul>
                            <li class="p-1 m-2 rounded-8 "> <input type="radio" id="f-option" name="selector">
                                <label for="f-option"><b>{{ $question->option_i }}</b></label>
                                <div class="check">
                                </div>
                            </li>
                            <li class="p-1 m-2 rounded-8 "> <input type="radio" id="s-option" name="selector">
                                <label for="s-option"><b>{{ $question->option_ii }}</b>
                                </label>
                                <div class="check">

                                </div>
                            </li>
                            <li class="p-1 m-2 rounded-8 "> <input type="radio" id="t-option" name="selector">
                                <label for="t-option"><b>{{ $question->option_iii }}</b></label>
                                <div class="check">

                                </div>
                            </li>
                            <li class="p-1 m-2 rounded-8 "> <input type="radio" id="l-option" name="selector">
                                <label for="l-option"><b>{{ $question->option_iv }}</b></label>
                                <div class="check">

                                </div>
                            </li>


                        </ul>
                    </div>
                </div>
            @empty
                <h2>No Question !</h2>
            @endforelse
        </div>

    </div>

    <div style="position:fixed; width: calc(100% - 52vh); height:7vh; bottom:0px;"
        class="border-top border-primary pe-4 pt-1">
        <div class="row">
            <div class="col-9"></div>
            <div class="col-3 text-end p-1"> <a href=""
                    class="ps-5 pe-5 h5 text-white shadow z-depth-3 p-1 bg-success  d-none">Next <i></i></a>
                <a href="" class="ps-5 pe-5 h5 text-white shadow z-depth-3 p-1 bg-success">Submit<i></i></a>
            </div>
        </div>
    </div>

    </div>
    <div style="width: 50vh; height:90vh;" class=" fixedx border-start p-1 border-success"><br>
        <h3 class="text-center h3">TCS Ninja Aptitude Mock Test Set 1.</h3>
        <hr>
        <div class="row">
            <div class="col-6">Question: 15</div>
            <div class="col-6">Time : 20 min</div>
        </div>
        <div class="text-center">
            <div class="container p-4">
                <div class="progress">
                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" style="width: 30%"
                        aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>

        </div>
        <div class="ps-3 m-1 p-2 border rounded border-danger">
            <h5>Warning Section:</h5>
            <div class="exam-alert text-center text-danger"></div>
            <p id="prediction"></p>
            <p class="exam-alert"></p>

        </div>
        @if ($isCamara == 'True')
            <div class="facex fixedxx rounded-8 border bg-success shadow border-success p-1 ">
                <video class="rounded-8 border border-light" id="video" width="300" height="200" autoplay
                    muted></video>
            </div>
        @endif
    </div>

    <script>
        var time = '12:00';
        (async () => {
            const {
                value: accept
            } = await Swal.fire({
                title: 'Terms and conditions',
                input: 'checkbox',
                inputValue: 1,
                inputPlaceholder: 'I agree with the terms and conditions',
                confirmButtonText: 'Start Test <i class="fa fa-arrow-right"></i>',
                inputValidator: (result) => {
                    return !result && 'You need to agree with T&C'
                }
            })

            if (accept) {
                openFullscreen();
                // Swal.fire('You agreed with T&C :)')
            }

        })()
    </script>

    @section('script')
        @if ($isCamara == 'True')
            <script src="{{ asset('faceapi/face-api.min.js') }}"></script>
            <script src="{{ asset('assets/js/face-rec-init.js') }}"></script>
        @endif
    @stop
</x-layout.examination.base>
