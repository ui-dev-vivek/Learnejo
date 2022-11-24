<div class="click-closed"></div>
<!--/ Form Search Star /-->
<div class="box-collapse">
    <div class="title-box-d">
        <h3 class="title-d">Student Dashboard</h3>
    </div>
    <span class="close-box-collapse right-boxed bi bi-x"></span>
    <hr class="bg-success">

    <section class="box-collapse-wrap container-fluid">
        @if (Session::has('StudentId'))
            <div class="main">
                <div class="text-center rounded-8 p-3 shadow border border-success bg-success text-white">
                    <p class="text-start">
                        <small><strong>{{ $student->student_id }}</strong></small>
                    </p>
                    <img class="rounded-circle border p-1 border-white" src="{{ $student->profile_pic }}"
                        alt="">

                    <h2 class="h2">{{ $student->name }}</h2>

                    <div class="row">
                        <div class="col-8 text-center pt-1">
                            {{ $student->email }}
                        </div>
                        <div class="col-4">
                            <p class="text-center">
                                <a href="/Logout" class="btn btn-sm btn-danger rounded-8">Logout</a>
                            </p>
                        </div>
                    </div>

                </div>
                <div class="mt-3">
                    <div class="shadow   p-2 rounded-8 border border-success">
                        <h5>My Subscriptions:</h5>
                        <hr>
                        <div class="border-bottom p-1 m-1">
                            <div class="row">
                                <div class="col-8">
                                    <strong>Udemy Courses</strong>
                                </div>
                                <div class="col-4 text-succes"> Free</div>
                            </div>
                        </div>
                        <div class="border-bottom p-1 m-1">
                            <div class="row">
                                <div class="col-8">
                                    <strong>Jobs/Internships Updates</strong>
                                </div>
                                <div class="col-4 text-succes"> Free</div>
                            </div>
                        </div>
                        <div class="border-bottom p-1 m-1">
                            <div class="row">
                                <div class="col-8">
                                    <strong>Mock-Test</strong>
                                </div>
                                <div class="col-4 text-succes"> Free</div>
                            </div>
                        </div>
                        <div class="border-bottom p-1 m-1">
                            <div class="row">
                                <div class="col-8">
                                    <strong>MCQs</strong>
                                </div>
                                <div class="col-4 text-succes"> Free</div>
                            </div>
                        </div>
                        <div class="border-bottom p-1 m-1">
                            <div class="row">
                                <div class="col-8">
                                    <strong>PDF Downloads</strong>
                                </div>
                                <div class="col-4"><i class="fa fa-inr"> </i> 15 / PDF</div>
                            </div>
                        </div>
                        <div class="border-bottom p-1 m-1">
                            <div class="row">
                                <div class="col-8">
                                    <strong>Solutions Downloads</strong>
                                </div>
                                <div class="col-4"><i class="fa fa-inr"> </i> 20 / Solution</div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="mt-3">
                    <div class="shadow   p-2 rounded-8 border border-success">
                        <h5>My Downloads:</h5>
                        <hr>
                        <div class="border-bottom p-1 m-1">
                            <div class="row">
                                <div class="col-8">
                                    <strong>Free Python Free Interview Question</strong>
                                </div>
                                <div class="col-4 text-succes"><a href="#">Download <i
                                            class="fa fa-download"></i></a></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="mt-3">
                    <div class="shadow border border-success p-2 rounded-8">
                        <h5 class="ps-1">My Payment Status</h5>
                        <hr>
                        {{-- <div class="rounded p-1 m-1 border-bottom">
                            <div class="row">
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-university"> </i></div>
                                        <div class="col-9">
                                            <small style="font-size:10px;">22-11-2022 | <strong>UPI87453876</strong> |
                                                Python For Biginer Live Online
                                                Classess.</small>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-2 text-center text-primary">
                                    <i class="fa fa-inr "> </i> 200
                                </div>
                                <div class="col-3 text-success text-center"><i class="fa fa-check-circle-o"> </i>
                                    Success
                                </div>

                            </div>
                        </div>
                        <div class="rounded p-1 m-1 border-bottom">
                            <div class="row">
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-university"> </i></div>
                                        <div class="col-9">
                                            <small style="font-size:10px;">22-11-2022 | <strong>UPI87453876</strong> |
                                                Python For Biginer Live Online
                                                Classess.</small>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-2 text-center text-primary">
                                    <i class="fa fa-inr "> </i> 200
                                </div>
                                <div class="col-3 text-warning text-center"><i class="fa fa-clock-o text-warning">
                                    </i>
                                    Panding.
                                </div>

                            </div>

                        </div>
                        <div class="rounded p-1 m-1 border-bottom">
                            <div class="row">
                                <div class="col-7">
                                    <div class="row">
                                        <div class="col-1"><i class="fa fa-university"> </i></div>
                                        <div class="col-9">
                                            <small style="font-size:10px;">22-11-2022 | <strong>UPI87453876</strong> |
                                                Wipro Interviews Questions.</small>
                                        </div>

                                    </div>

                                </div>
                                <div class="col-2 text-center text-primary">
                                    <i class="fa fa-inr "> </i> 200
                                </div>
                                <div class="col-3 text-danger text-center"><i class="fa fa-exclamation-circle"> </i>
                                    Cancel</div>
                            </div>

                        </div> --}}


                    </div>

                </div>
            </div>
            <div class="mt-3">
                <div class="shadow border border-success p-2 rounded-8">
                    <h5>My Activitys:</h5>
                    <hr>
                    <small>Not Found!</small>
                </div>
            </div>
            <div class="mt-3">
                <div class="shadow border border-success p-2 rounded-8">
                    <h5>Notice:</h5>
                    <hr>
                    <p>Udemy Courses are expired with in 30 min. because it's limited enrollments. please enroll soon as
                        possible.</p>
                </div>
            </div>

            <div class="mt-3">
                <div class="shadow text-center text-white bg-success p-2 rounded-8">

                    <h4 class="h4">Team Learnejo</h4>
                    <small>Learn & Enhance Job Opportunity!</small>
                </div>
            </div>
            <p class="text-center mt-4">
                <small><strong>Powered by AVR Softnet Com.</strong></small>
            </p>
</div>
@endif

</div>


</section>
</div>
<script>
    function onClickhide() {
        $('#massage').html(" ");
    }
</script>
