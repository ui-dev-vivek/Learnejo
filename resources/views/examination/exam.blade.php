<x-layout.examination.base><br>
    <style>
        body {
            margin: 0 !important;
            padding: 0 !important;
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
            bottom: 0;
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
    </style>
    {{-- <section class="p-1 shadow border">
        <div class="row">
            <div class="col-md-9">
                <div class="scroll-v" style="font-size: 1.2rem;">
                    <p>Sheela started a business in 2009 by investing Rs.50,000. She invested Rs. 20,000 as
                        additional amount in 2010 and her friend Devi joined her with an amount of Rs.70,000. Sheela
                        invested another Rs. 20,000 in 2011 and Anu joined them with Rs. 70,000. At the end of these 3
                        years, they earned a profit of Rs. 3,00,000. Find Devi's share?<br>
                    </p>
                    <div class="m-2">
                        <button class="p-3 mb-2 btn-block rounded-8">
                            A: 1749
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            B: 1649
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            C: 1449
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            D: 1523
                        </button>
                    </div>
                    <div class="m-2">
                        <button class="p-3 mb-2 btn-block rounded-8">
                            A: 1749
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            B: 1649
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            C: 1449
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            D: 1523
                        </button>
                    </div>
                    <div class="m-2">
                        <button class="p-3 mb-2 btn-block rounded-8">
                            A: 1749
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            B: 1649
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            C: 1449
                        </button><br>
                        <button class="p-3 mb-2 btn-block rounded-8">
                            D: 1523
                        </button>
                    </div>

                </div>





            </div>
            <div class="col-md-3 border-start border-success" style="position: fixed">
                <h3 class="text-center h3">TCS Ninja Aptitude Mock Test Set 1.</h3>
                <hr>
                <div class="row">
                    <div class="col-6">Question: 15</div>
                    <div class="col-6">Time : 20 min</div>
                </div>
                <div class="text-center">
                    <div class="container p-4">
                        <div class="progress ss" data-percentage="100">
                            <span class="progress-left">
                                <span class="progress-bar"></span>
                            </span>
                            <span class="progress-right">
                                <span class="progress-bar"></span>
                            </span>
                            <div class="progress-value">
                                <div class="h6">
                                    <span class="timer"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="facex fixedx rounded-8">
                    <video class="rounded-8" id="video" class="rounded-8" width="300" height="200" autoplay
                        muted></video>
                </div>
            </div>
        </div>
    </section> --}}



    </div>

    <div class=" mainx p-2" style="height:90vh; ">main</div>
    <div style="width: 50vh; height:90vh;" class=" fixedx">
        <div class="facex fixedxx rounded-8 ">
            <video class="" id="video" class="rounded-8" width="300" height="200" autoplay muted></video>
        </div>
    </div>

    <script>
        var time = '12:00';
    </script>
</x-layout.examination.base>