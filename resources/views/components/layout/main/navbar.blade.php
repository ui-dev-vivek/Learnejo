   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
       <div class="container d-flex align-items-center">

           <h1 class="logo me-auto"><a href="/"><img src="{{ asset('assets/img/logo.png') }}" alt="">
                   <span class="name text-primary"></span></a></h1>
           <!-- Uncomment below if you prefer to use an image logo -->
           <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

           <nav id="navbar" class="navbar order-last order-lg-0">
               <ul>
                   <li><a href="{{ url('/') }}" class="">Home</a></li>

                   <li><a href="{{ url('/Courses') }}"><span>Courses</span> <i class="bi bi-chevron-down"></i></a>

                   </li>

                   <li><a href="{{ url('/Mock-Test') }}"><span>Mock Test</span> <i class="bi bi-chevron-down"></i></a>
                   </li>

                   <li><a href="{{ url('/Job-Internships') }}"><span>Job-Interbships</span> <i
                               class="bi bi-chevron-down"></i></a>

                   </li>


                   <li><a href="{{ url('/About-Us') }}">About</a></li>

                   <li><a href="{{ url('/Contact-Us') }}">Contact</a></li>
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
           </nav><!-- .navbar -->

           <div class="header-social-links d-flex">
               {{-- <a type="button" class="btn-b-n navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                data-bs-target="#navbarTogglerDemo01">
                <i class="bi bi-person text-success"></i><b> Login</b>
            </a> --}}
               <a class="navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                   data-bs-target="#navbarTogglerDemo01">
                   {{-- <!-- <i class="bi bi-person"></i> --> <img width="25"
                       src="https://lh3.googleusercontent.com/ogw/ADea4I7Mo74MBPhuoUUFAjaM1_pkhT4U0DHiXjYc99hbcQ=s32-c-mo"
                       class="rounded-circle border border-success "> --}}
                   <b class="text-success">Login </b>
               </a>
           </div>
       </div>
   </header>
