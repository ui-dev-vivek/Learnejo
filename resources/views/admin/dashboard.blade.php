<x-layout.admin.base>
    <div class="row">
        <!-- Material statustic card start -->
        <div class="col-xl-4 col-md-12">

            <div class="card mat-stat-card">

                <div class="card-block">

                    <div class="row align-items-center b-b-default">
                        <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                            <div class="row align-items-center text-center">


                                <div class="col-12 p-l-0">
                                    <h5>{{ $totalCourseCount }} / {{ $todayCourseCount }}</h5>
                                    <p class="text-muted m-b-0">Total / Today <br>Courses</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">

                                <div class="col-12 p-l-0">
                                    <h5>{{ $totalCourseViewCount }} / {{ $todayCourseViewCount }}</h5>
                                    <p class="text-muted m-b-0">Total / Today <br> Courses View</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                            <div class="row align-items-center text-center">

                                <div class="col-12 p-l-0">
                                    <h5>{{ $totalCourseEnrollCount }} / {{ $todayCourseEnrollCount }}</h5>
                                    <p class="text-muted m-b-0">Total / Today <br> Courses Enroll</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">

                                <div class="col-12 p-l-0">
                                    <h5>--</h5>
                                    <p class="text-muted m-b-0">--</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">

            <div class="card mat-stat-card">

                <div class="card-block">

                    <div class="row align-items-center b-b-default">
                        <div class="col-sm-6 b-r-default p-b-20 p-t-20">
                            <div class="row align-items-center text-center">


                                <div class="col-12 p-l-0">
                                    <h5>{{ $totalJobsCount }} / {{ $todayJobsCount }}</h5>
                                    <p class="text-muted m-b-0">Total / Today <br>Jobs</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">

                                <div class="col-12 p-l-0">
                                    <h5>{{ $totalJobsViewCount }} / {{ $todayJobsViewCount }}</h5>
                                    <p class="text-muted m-b-0">Total / Today <br> Jobs View</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-sm-6 p-b-20 p-t-20 b-r-default">
                            <div class="row align-items-center text-center">

                                <div class="col-12 p-l-0">
                                    <h5>{{ $totalJobsApplyCount }} / {{ $todayJobsApplyCount }}</h5>
                                    <p class="text-muted m-b-0">Total / Today <br>Jobs Apply</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 p-b-20 p-t-20">
                            <div class="row align-items-center text-center">

                                <div class="col-12 p-l-0">
                                    <h5>--</h5>
                                    <p class="text-muted m-b-0">--</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-12">
            <div class="card mat-clr-stat-card text-white green ">
                <div class="card-block">
                    <div class="row">
                        <div class="col-3 text-center bg-c-green">
                            <i class="fa fa-star mat-icon f-24"></i>
                        </div>
                        <div class="col-9 cst-cont">
                            <h5>4000+</h5>
                            <p class="m-b-0">Ratings Received</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card mat-clr-stat-card text-white blue">
                <div class="card-block">
                    <div class="row">
                        <div class="col-3 text-center bg-c-blue">
                            <i class="fa fa-trophy mat-icon f-24"></i>
                        </div>
                        <div class="col-9 cst-cont">
                            <h5>17</h5>
                            <p class="m-b-0">Achievements</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Material statustic card end -->
        <!-- order-visitor start -->


        <!-- order-visitor end -->

        <!--  sale analytics start -->
        <div class="col-xl-6 col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Registered Students</h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li><i class="fa fa fa-wrench open-card-option"></i></li>
                            <li><i class="fa fa-window-maximize full-card"></i></li>
                            <li><i class="fa fa-minus minimize-card"></i></li>
                            <li><i class="fa fa-refresh reload-card"></i></li>
                            <li><i class="fa fa-trash close-card"></i></li>
                        </ul>
                    </div>
                </div>
                <div class="card-block" style="">
                    <div class="table-responsive">
                        <table class="table table-hover m-b-0 without-header">
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>
                                            <div class="d-inline-block align-middle">
                                                <img src="{{ $user->profile_pic }}" alt="user image"
                                                    class="img-radius img-40 align-top m-r-15">
                                                <div class="d-inline-block">
                                                    <h6>{{ $user->name }}</h6>
                                                    <p class="text-muted m-b-0">{{ $user->email }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <h6 class="f-w-700">{{ $user->student_id }}<i
                                                    class="fa fa-level-down-alt text-c-red m-l-10"></i></h6>
                                        </td>
                                    </tr>
                                @empty
                                    <p>No User Found</p>
                                @endforelse

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-12">
            <div class="row">
                <!-- sale card start -->

                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Total Subscription</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>7652</h4>
                            <p class="m-b-0">48% From Last 24 Hours</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Order Status</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>6325</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-c-red total-card">
                        <div class="card-block">
                            <div class="text-left">
                                <h4>489</h4>
                                <p class="m-0">Total Comment</p>
                            </div>
                            <span class="label bg-c-red value-badges">15%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card bg-c-green total-card">
                        <div class="card-block">
                            <div class="text-left">
                                <h4>$5782</h4>
                                <p class="m-0">Income Status</p>
                            </div>
                            <span class="label bg-c-green value-badges">20%</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Unique Visitors</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-down m-r-15 text-c-red"></i>652</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card text-center order-visitor-card">
                        <div class="card-block">
                            <h6 class="m-b-0">Monthly Earnings</h6>
                            <h4 class="m-t-15 m-b-15"><i class="fa fa-arrow-up m-r-15 text-c-green"></i>5963</h4>
                            <p class="m-b-0">36% From Last 6 Months</p>
                        </div>
                    </div>
                </div>
                <!-- sale card end -->
            </div>
        </div>

        <!--  sale analytics end -->

        <!-- Project statustic start -->

        <x-admin.box>
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <h6>Published Project</h6>
                    <h5 class="m-b-30 f-w-700">532<span class="text-c-green m-l-10">+1.69%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-c-red" style="width:25%"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <h6>Completed Task</h6>
                    <h5 class="m-b-30 f-w-700">4,569<span class="text-c-red m-l-10">-0.5%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-c-blue" style="width:65%"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <h6>Successfull Task</h6>
                    <h5 class="m-b-30 f-w-700">89%<span class="text-c-green m-l-10">+0.99%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-c-green" style="width:85%"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <h6>Ongoing Project</h6>
                    <h5 class="m-b-30 f-w-700">365<span class="text-c-green m-l-10">+0.35%</span></h5>
                    <div class="progress">
                        <div class="progress-bar bg-c-yellow" style="width:45%"></div>
                    </div>
                </div>
            </div>
        </x-admin.box>
        <!-- Project statustic end -->
    </div>

</x-layout.admin.base>
