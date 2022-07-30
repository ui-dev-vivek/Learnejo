<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin Login : Learnejo</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->

    <link rel="icon" href="{{ asset('adminAssets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/bootstrap/css/bootstrap.min.css') }}">
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('adminAssets/pages/waves/css/waves.min.css" type="text/css') }}"
        media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/icon/themify-icons/themify-icons.css') }}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/icon/icofont/css/icofont.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body themebg-pattern="theme1">
    @if (count($errors) > 0)

        Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: "@foreach ($errors->all() as $error)
            {{ $error }} \n
            @endforeach",
            footer: 'Learnejo'
            })
        @endif
        @if (session('success'))
            <script>
                tostfire('success', "{{ session('success') }}");
            </script>
        @endif
        @if (session('info'))
            <script>
                tostfire('info', "{{ session('info') }}");
            </script>
        @endif
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('error') }}',
                    footer: 'Learnejo'
                })
            </script>
        @endif
        <!-- Pre-loader start -->
        <div class="theme-loader">
            <div class="loader-track">
                <div class="preloader-wrapper">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>

                    <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Pre-loader end -->

        <section class="login-block">
            <!-- Container-fluid starts -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <!-- Authentication card start -->

                        <form class="md-float-material form-material" method="post"
                            action="{{ url('/Admin-Login') }}">
                            @csrf
                            <div class="text-center">
                                <h2 class="text-white  h2">Learnejo <small>Learn Awesome!</small></h2>
                            </div>
                            <div class="auth-box card">
                                <div class="card-block">
                                    <div class="row m-b-20">
                                        <div class="col-md-12">
                                            <h3 class="text-center">Admin Login</h3>
                                        </div>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="text" name="email" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Your Email Address</label>
                                    </div>
                                    <div class="form-group form-primary">
                                        <input type="password" name="password" class="form-control">
                                        <span class="form-bar"></span>
                                        <label class="float-label">Password</label>
                                    </div>
                                    <div class="row m-t-25 text-left">
                                        <div class="col-12">
                                            <div class="checkbox-fade fade-in-primary d-">
                                                <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i
                                                            class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                                    <span class="text-inverse">Remember me</span>
                                                </label>
                                            </div>
                                            <div class="forgot-phone text-right f-right">
                                                <a href="javascript:void(0)" onclick="alert(' Action Not Allow.');"
                                                    class="text-right f-w-600"> Forgot
                                                    Password?</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row m-t-30">
                                        <div class="col-md-12">

                                            <input type="submit"
                                                class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20"
                                                value="Sign in">
                                        </div>
                                    </div>
                                    <hr />
                                    <div class="row">
                                        <div class="col-md-10">
                                            <p class="text-inverse text-left m-b-0">Thank you.</p>
                                            <p class="text-inverse text-left"><a href="index.html"><b>Back to
                                                        website</b></a></p>
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- end of form -->
                    </div>
                    <!-- end of col-sm-12 -->
                </div>
                <!-- end of row -->
            </div>
            <!-- end of container-fluid -->
        </section>

        <!-- Required Jquery -->
        <script type="text/javascript" src="{{ asset('adminAssets/js/jquery/jquery.min.js') }} "></script>
        <script type="text/javascript" src="{{ asset('adminAssets/js/jquery-ui/jquery-ui.min.js') }} "></script>
        <script type="text/javascript" src="{{ asset('adminAssets/js/popper.js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('adminAssets/js/bootstrap/js/bootstrap.min.js ') }}"></script>
        <!-- waves js -->
        <script src="{{ asset('adminAssets/pages/waves/js/waves.min.js') }}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{ asset('adminAssets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script type="text/javascript" src="{{ asset('adminAssets/js/common-pages.js') }}"></script>
</body>

</html>
