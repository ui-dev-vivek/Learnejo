   <!-- ======= Header ======= -->
   <header id="header" class="">
       <div class="container d-flex align-items-center">

           <h1 class="logo me-auto"><a href="/"><img src="{{ asset('assets/image/logo-dark.png') }}"
                       alt="Learnejo"></a></h1>



           <div class="header-social-links d-flex">
               @if (Session::has('StudentId'))
                   @php
                       $studentName = explode(' ', $student->Name);
                   @endphp
                   <a class="navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                       data-bs-target="#navbarTogglerDemo01">
                       <img width="25"
                           src="https://lh3.googleusercontent.com/ogw/ADea4I7Mo74MBPhuoUUFAjaM1_pkhT4U0DHiXjYc99hbcQ=s32-c-mo"
                           class="rounded-circle border border-success "> &nbsp; {{ $studentName[0] }}

                   </a>
               @else
                   <a type="button" class=" navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                       data-bs-target="#navbarTogglerDemo01"> <span class="loginbtn bg-success text-white">
                           <i class="fa fa-user text-white"></i><b>Login</b></span>
                   </a>
               @endif
           </div>
       </div>
   </header>
