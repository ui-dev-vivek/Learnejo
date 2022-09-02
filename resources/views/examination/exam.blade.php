<x-layout.examination.base><br>
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



    <div class=" mainx" style="height:90vh; ">
        <div class="ps-3 pt-1 border-bottom border-primary">
            <h6 class="h6">Section: <a class="bg-primary text-white rounded p-1" href="javascript:void(0)">Aptitude <i
                        class="fa fa-info-circle" aria-hidden="true"></i></a> &nbsp;<a
                    class="bg-primary text-white rounded p-1" href="javascript:void(0)"
                    onclick="alert('Not
                    Allow!');">Coding <i class="fa fa-info-circle"
                        aria-hidden="true"></i> </a> </h6>
        </div>
        <div class="p-4 scroll-v">
            <div class="row">
                <div class="col-1">
                    <p><b>Que 1: </b></p>
                </div>
                <div class="col-11">
                    <p>An exam was conducted and the following was analyzed. 4 men were able to check some exam papers
                        in 8 days working 5 hours regularly. What is the total number of hours taken by 2 men in
                        20 days
                        to check double the number of exam papers?</p>
                </div>
            </div><br>
            <ul>
                <li class="p-1 m-2 rounded-8 "> <input type="radio" id="f-option" name="selector">
                    <label for="f-option"><b>A. </b>An exam was conducted and the following was analyzed. 4 men
                        were able to check some exam papers in 8 days working 5 hours regularly. What is
                        the total number of hours taken by 2 men in 20 days to check double the number
                        of exam papers?</label>
                    <div class="check">

                    </div>
                </li>
                <li class="p-1 m-2 rounded-8 "> <input type="radio" id="s-option" name="selector">
                    <label for="s-option"><b>A. </b>An exam was conducted and the
                    </label>
                    <div class="check">

                    </div>
                </li>
                <li class="p-1 m-2 rounded-8 "> <input type="radio" id="t-option" name="selector">
                    <label for="t-option"><b>A. </b>An exam was conducted and the following was analyzed. 4 men
                        were able to check some exam papers in 8 days working 5 hours regularly. What is
                        the total number of hours taken by 2 men in 20 days to check double the number
                        of exam papers?</label>
                    <div class="check">

                    </div>
                </li>
                <li class="p-1 m-2 rounded-8 "> <input type="radio" id="l-option" name="selector">
                    <label for="l-option"><b>A. </b>An exam was conducted and the following was analyzed. 4 men
                        were able to check some exam papers in 8 days working 5 hours regularly. What is
                        the total number of hours taken by 2 men in 20 days to check double the number
                        of exam papers?</label>
                    <div class="check">

                    </div>
                </li>


            </ul>

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

        <div class="facex fixedxx rounded-8 ">
            <video class="" id="video" class="rounded-8" width="300" height="200" autoplay muted></video>
        </div>
    </div>

    <script>
        var time = '12:00';
    </script>
</x-layout.examination.base>
