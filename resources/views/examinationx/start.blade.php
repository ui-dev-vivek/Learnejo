<x-layout.examination.base>
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

</x-layout.examination.base>
