<x-Layout.Main.Base>
    <section class="shadow p-1">
        <div class="row">
            <div class="col-sm-9">
                <div class="p-2" style="border-bottom:1px solid lightgreen;">
                    <div class="row">
                        <div class="col-sm-4"> <strong><span class="name h4 text-primary"></span></strong></div>
                        <div class="col-sm-8 h5"> {{ $getQuestion[0]->name }} Mock Test</div>
                    </div>
                </div>
                <div class="p-2 mt-1 ">
                    <h6>Section: <a class="bg-primary text-white rounded p-1" href="">Aptitude <i
                                class="fa fa-info-circle" aria-hidden="true"></i> </a> </h6>
                </div>
                <div class="progress">
                    <div class="progress-bar progress-bar-danger progress-bar-striped ss" role="progressbar"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="40"
                        style="width:0%; background-color:lightgreen;">
                        <span class="timer"></span>
                    </div>
                </div>


            </div>
            <div class="col-sm-3 p-1">
                <div class=" p-2  text-white bg-primary text-center">Section Time Left: <span class="timer"></span>
                </div>
                <div class="bg-success p-2 mt-2">
                    <div class="text-center">
                        <img width="40" class="rounded-circle border border-warning"
                            src="https://i.stack.imgur.com/9Evvf.png?s=256&g=1" alt="">
                        Vivek Kumar Yadav
                    </div>
                </div>
            </div>
        </div>
        <div class="fixed-bottom">
            <div class="row p-2">
                <div class="col-sm-10"></div>
                <div class="col-sm-2">
                    <button class="btn btn-success">Submit</button>
                </div>
            </div>
        </div>
    </section>
    <div class="row">
        <div class="col-9 p-2">
            @forelse ($getQuestion[0]->Question as $que)
                {{ $que->question }}
            @empty
            @endforelse


        </div>
        <div class="col-3" style="border-left:1px solid lightgreen">
            <div class="p-2 text-center">
                Question No:
                <p class="h5">
                    << 1 <span class="bg-success text-white ms-2 me-2 rounded ps-2 pe-2">2</span> 3 >>
                </p>
            </div><br>
            <div class="row">
                <div class="col-6"><span class="bg-info p-1 rounded">50</span> Atemped </div>
                <div class="col-6"><span class="bg-warning p-1 rounded">50</span> Not Answered</div>
            </div><br>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTshwIKzqqX0sbDgaVSRrMNPHm0ZMJOyAQiWg&usqp=CAU"
                alt="">

        </div>
    </div>


    <script></script>
</x-Layout.Main.Base>
