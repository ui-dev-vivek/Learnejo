@php
$title = 'Start : Mock Test';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
@endphp
<x-layout.examination.base :title="$title" :image="$image" :description="$description">

    <style>
        .facex {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }

        canvas {
            position: absolute;
        }
    </style>
    <div class="row ">
        <div class="col-md-4 ">
            <section class="bg-success p-4 " style="height:100vh; ">
                <div class="v-c-center">
                    <div class="v-center text-white">
                        <h2 class="h2 text-white">Welcome <br>{{ $student->Name }}</h2>
                        <p><b>{{ $student->collage }}</b></p>
                        <hr>
                        <h3 class="h4">Mock Test</h3>
                        <h2 class="h3">{{ $topic->name }} {{ $heading->name }}</h2>
                        <div class="row">
                            <div class="col-6">Time : {{ $heading->timing }} Min</div>
                            <div class="col-6">Question : {{ $heading->number_of_question }} </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
        <div class="col-md-8"><br><br>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="shadow  facex  rounded-8 bg-success p-1">
                        <video class="rounded-8" id="video" height="300" width="400" autoplay muted></video>
                    </div>
                    <div class="p-2 rounded" id="action"></div>

                    <div id="prediction"></div>
                </div>
                <div class="col-md-3">
                    <div></div>
                </div>
            </div>
        </div>
    </div>

    </section>
    @section('script')
        <script src="{{ asset('faceapi/face-api.min.js') }}"></script>
        <script src="{{ asset('assets/js/face-rec-init.js') }}"></script>
    @stop
</x-layout.examination.base>
