<!DOCTYPE html>
<html lang="en">

<head>
    <title>Dashboard : Learnejo</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="keywords"
        content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="Codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="{{ asset('adminAssets/images/favicon.ico') }}" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/bootstrap/css/bootstrap.min.css') }}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- waves.css -->
    <link rel="stylesheet" href="{{ asset('adminAssets/pages/waves/css/waves.min.css') }}" type="text/css"
        media="all">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/icon/themify-icons/themify-icons.css') }}">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/icon/feather/css/feather.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/icon/font-awesome/css/font-awesome.min.css') }}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('adminAssets/css/jquery.mCustomScrollbar.css') }}">


</head>

<body>
    @if (count($errors) > 0)

        Swal.fire({
        icon: 'error',
        title: 'Error!',
        text: "@foreach ($errors->all() as $error)
            {{ $error }} \n
            @endforeach",
            footer: '|:Learnejo'
            })
        @endif
        @if (session('success'))
            <script>
                tostfire('success', "{{ session('success') }}");
            </script>
        @endif
        @if (session('error'))
            <script>
                Swal.fire({
                    icon: 'error',
                    title: 'Error!',
                    text: '{{ session('success') }}',
                    footer: '|:Learnejo'
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
        <div id="pcoded" class="pcoded">
            <div class="pcoded-overlay-box"></div>
            <div class="pcoded-container navbar-wrapper">
                {{-- Nav Bar --}}
                <x-layout.admin.navbar />
                <div class="pcoded-main-container">
                    <div class="pcoded-wrapper">
                        {{-- Side Nev --}}
                        <x-layout.admin.sidebar />
                        <div class="pcoded-content">

                            <!-- Page-header end -->
                            <div class="pcoded-inner-content">
                                <div class="main-body">
                                    <div class="page-wrapper">
                                        <div class="page-body">
                                            {{-- Main Content --}}
                                            {{ $slot }}
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div id="styleSelector"></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Required Jquery -->
        <script type="text/javascript" src="{{ asset('adminAssets/js/jquery/jquery.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('adminAssets/js/jquery-ui/jquery-ui.min.js ') }}"></script>
        <script type="text/javascript" src="{{ asset('adminAssets/js/popper.js/popper.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('adminAssets/js/bootstrap/js/bootstrap.min.js ') }}"></script>
        <!-- waves js -->
        <script src="{{ asset('adminAssets/pages/waves/js/waves.min.js') }}"></script>
        <!-- jquery slimscroll js -->
        <script type="text/javascript" src="{{ asset('adminAssets/js/jquery-slimscroll/jquery.slimscroll.js') }}"></script>
        <script src="{{ asset('adminAssets/js/pcoded.min.js') }}"></script>
        <script src="{{ asset('adminAssets/js/vertical/vertical-layout.min.js') }}"></script>
        <script src="{{ asset('adminAssets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <!-- Custom js -->
        <script type="text/javascript" src="{{ asset('adminAssets/js/script.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('adminAssets/assets/js/ajax.js') }}"></script>
        <script type="text/javascript" src="{{ asset('adminAssets/assets/js/my.js') }}"></script>
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'mid',
                showConfirmButton: false,
                timer: 1000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            function tostfire(type, massage) {
                Toast.fire({
                    icon: type,
                    title: massage
                })

            }
        </script>

</body>

</html>
