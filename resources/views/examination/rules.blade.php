<x-layout.examination.base>
    <section class="container">
        <h1>TCS Ninja Aptitude Assment set 1</h1>
        <small>Date: {{ date('d-m-Y A') }}</small>
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

        <div class="text-center startBtn d-none">
            <p>Please read all rules and <a href="javascript:void(0)"> Privacy Policy.</a></p>
            <a class="btn btn-info " href="{{ url('Start-Examination/hi') }}">Start Test</a>


        </div>

    </section>
</x-layout.examination.base>
