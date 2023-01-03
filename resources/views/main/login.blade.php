@php
    $title = 'Student Login';
    $image = asset('assets/image/home.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'> <br> <br><br>
    </x-slot>
    <div class="container text-justify">

        <div class="m-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="shadow p-3 rounded-8 border border-success text-center">
                        <h3 class="h3">Welcome back!</h3>
                        <small class="text-success"><strong>Please Login With Google.</strong></small>
                        <br>
                        <a class="border border-info h5 m-2 rounded-8 p-2 btn" href="/auth/google">
                            <img class="img-fluid" width="20"
                                src="https://cdn.pixabay.com/photo/2015/10/31/12/56/google-1015752_960_720.png"
                                alt=""> &nbsp;&nbsp;&nbsp;Sigh With Google</a>
                        <div class="row">
                            <div class="col-5">
                                <hr>
                            </div>
                            <div class="col-2">
                                <p class="h6">OR</p>
                            </div>
                            <div class="col-5">
                                <hr>
                            </div>
                        </div>
                        <div class="ps-5 ms-5 me-5 pe-5">
                            <form action="#">
                                <input class="form-control border border-success mt-2" type="email"
                                    placeholder="Enter Email:">
                                <input class="form-control mt-2 border border-success" type="password"
                                    placeholder="Enter Password:">
                                <p class="text-end mt-2">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success rounded"> Login</a>
                                </p>
                                <small class="text-success"> Forgot Password?</small>

                            </form>
                        </div>


                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</x-layout.main.base>
