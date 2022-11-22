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

                    <span class="h2">{{ $student->name }}</span>

                    <p class="text-end">
                        <a href="/Logout" class="btn btn-sm btn-danger rounded-8">Logout</a>
                    </p>
                </div>
                <div class="mt-3">
                    <div class="shadow border border-success p-2 rounded-8">
                        <h5 class="ps-1">My Payment Status</h5>
                        <hr>
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
                                <div class="col-3 text-warning text-center"><i class="fa fa-clock-o text-warning"> </i>
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

                        </div>


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
                    <small>Not Found!</small>
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
