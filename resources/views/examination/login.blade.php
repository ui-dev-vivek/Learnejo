@php
    $title = 'Login : Mock Test';
    $image = asset('assets/image/icon.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
@endphp
<x-layout.examination.base :title="$title" :image="$image" :description="$description">
    @section('css')
        <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
    @stop
    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center p-5 shadow border m-2 rounded-8">
                    <h1 class="h1">Students Login</h1> <small>For Online Assessment.</small>
                    <hr><br>
                    {{-- {{ session('fromLoginRequest') }} --}}
                    <form id="examination-login">
                        @csrf
                        <div class="input-group">
                            <span class="input-group-text mb-3 p-3 h1" id="basic-addon1"><i class="fa fa-envelope-o"
                                    aria-hidden="true"></i></span>
                            <input name="email" class="form-control border border-success mb-3 p-3 h1" type="email"
                                placeholder="Emain id:" required>
                        </div>
                        <div class="input-group">
                            <span class="input-group-text mb-3 p-3 h1" id="basic-addon1"><i class="fa fa-key"
                                    aria-hidden="true"></i></span>
                            <input name="password" class="form-control border border-success mb-3 p-3 h1"
                                type="password" placeholder="Password:" required>
                        </div>





                        <div class="row">
                            <div class="col-7 pt-3">
                                <div class="massage"></div>
                            </div>
                            <div class="col-5">
                                <p class="text-end">
                                    <button type="submit"
                                        class="btn btn-info hvr-sweep-to-right hvr-icon-wobble-horizontal"><span
                                            class="login-btn">Login
                                            &nbsp;
                                            <i class="fa fa-sign-in hvr-icon" aria-hidden="true"></i></span> <span
                                            class="login-loader d-none"><i
                                                class="fa fa-spinner fa-pluse fa-1x"></i></span></button>
                                </p>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 text-end"><br>
                    <img width="600" class="img-fluid"
                        src="https://rec-test.infosys.com/assets/images/codespace_banner.png" alt="">
                </div>
            </div>
        </div>
    </section>
    @section('script')
        <script src="{{ asset('assets/ajax/examination-login.js') }}"></script>
    @stop
</x-layout.examination.base>
