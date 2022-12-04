@php
    $title = 'Rules : Mock Test';
    $image = asset('assets/image/icon.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
@endphp
<x-layout.examination.base :title="$title" :image="$image" :description="$description">
    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
    @stop
    <section class="container">
        <h1>{{ $topic->name }} {{ $heading->name }}</h1>
        <small>Date: {{ date('d-m-Y A') }} | Questions: {{ $heading->number_of_question }} | Time:
            {{ $heading->timing }}</small>
        <hr>
        <div class="row">
            <div class="col-md p-3">
                <p class="text-center h5">Examination Rules.</p>
                <hr>
                <small>
                    <ol>
                        <li>You must use a functioning webcam and microphone.</li>
                        <li> No cell phones or other secondary devices in the room or test area.</li>
                        <li> Your desk/table must be clear or any materials except your test-taking device.</li>
                        <li>No one else can be in the room with you.</li>
                        <li>No talking. </li>
                        <li>The testing room must be well-lit and you must be clearly visible.</li>
                        <li>No dual screens/monitors.</li>
                        <li>Do not leave the camera.</li>
                        <li>No use of additional applications or internet.</li>
                    </ol>
                </small>
            </div>

            <div class="col-md p-3">
                <h2 class=" text-success pb-4">Compatibility</h2>
                <h6 class=" p-1 bcc"><i class="fa fa-chrome" aria-hidden="true"> </i> <span id="bcc"><i
                            class="fa fa-spinner fa-spin text-success"> </i></span> &nbsp;Browser Compatibility Check.
                    <i class="fa fa-check-circle-o chbcc d-none" aria-hidden="true"></i>
                </h6>
                <hr>
                <h6 class=" p-1 dcc"><i class="fa fa-laptop" aria-hidden="true"> </i> <span id="dcc"><i
                            class="fa fa-spinner fa-spin text-success"> </i></span> &nbsp;Device Compatibility Check. <i
                        class="fa fa-check-circle-o chdcc d-none" aria-hidden="true"></i></h6>
                <hr>
                <h6 class=" p-1 ncc"><i class="fa fa-wifi" aria-hidden="true"> </i> <span id="ncc"><i
                            class="fa fa-spinner fa-spin text-success"> </i></span> &nbsp;Network Compatibility Check.
                    <i class="fa fa-check-circle-o chncc d-none" aria-hidden="true"></i>
                </h6>
                &nbsp;&nbsp;&nbsp;<small id="progress"></small>
            </div>
        </div>
        <hr>
        @php
            $urlx = url('/Start-Examination') . '/' . $topic->prama_link . '/' . $heading->prama_link;
        @endphp
        <div class="text-center startBtn d-none ">
            <p>Please read all rules and <a href="javascript:void(0)"> Privacy Policy.</a></p>
            @if (date('H') >= '08' && date('H') <= '18')
                <a onclick='launchFullScreen(document.documentElement)'
                    class="csbtn hvr-sweep-to-right  p-2 ps-4 pe-4 border border-success " href="javascript:void(0)"> <i
                        class="fa fa-camera"> </i>
                    Start With Camera <br> <small>AI proctored</small>
                </a>
                <a id="chanhe" href="{{ $urlx }}">{{ $urlx }} fg</a>
            @endif
            <a onclick="launchFullScreen(document.documentElement)"
                class=" hvr-sweep-to-right bg-info text-white ms-3 p-2 ps-4 pe-4 border border-info me-3"
                href="{{ url('/Examination') }}/{{ $topic->prama_link }}/{{ $heading->prama_link }}">Start
                Test
                <br><small>Without Camera</small></a>

        </div>

        @section('script')
            <script src="{{ asset('assets/js/compatibility-test.js') }}"></script>
        @stop
    </section>

</x-layout.examination.base>
