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

                    <img class="rounded-circle border p-1 border-white" src="{{ $student->profile_pic }}" alt="">
                    <small><strong>Id: {{ $student->student_id }}</strong></small>
                    <h2 class="h2">{{ $student->name }}</h2>
                    <small>{{ $student->email }}</small>
                    <p class="text-end">
                        <a href="/Logout" class="btn btn-sm btn-danger rounded-8">Logout</a>
                    </p>
                </div>
                <div class="mt-3">
                    <div class="shadow border border-success p-2 rounded-8">
                        <h5>My Activitys:</h5>
                        <table class="table table-responsive">
                            <tr>
                                <td>
                                    Enroll on courses Happy to You.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enroll on courses Happy to You.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enroll on courses Happy to You.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enroll on courses Happy to You.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enroll on courses Happy to You.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enroll on courses Happy to You.
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Enroll on courses Happy to You.
                                </td>
                            </tr>

                        </table>
                    </div>
                </div>
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
