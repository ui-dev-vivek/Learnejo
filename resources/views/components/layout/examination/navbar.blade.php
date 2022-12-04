   <!-- ======= Header ======= -->
   <header id="header" class="" style="height: 7v">
       <div class="container d-flex align-items-center">

           <h1 class="logo me-auto"><a href="/"><img src="{{ asset('assets/image/logo-dark.png') }}"
                       alt="Learnejo"></a></h1>



           <div class="header-social-links d-flex">
               @if (Session::has('StudentId'))
                   {{-- {{ Session::get('StudentId') }} --}}

                   <a class="navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                       data-bs-target="#navbarTogglerDemo01">
                       <img width="25" src="{{ $student->profile_pic }}"
                           class="rounded-circle border border-success mt-2">
                       &nbsp; {{ $student->name }} <p style="font-size:10px; padding-left:40px;"><strong>Student
                               Dashboard</strong></p>

                   </a>
               @else
                   <a href="/auth/google"><img class="img-fluid" width="17"
                           src="https://cdn.pixabay.com/photo/2015/10/31/12/56/google-1015752_960_720.png"
                           alt=""> <span class="text-primary pt-1"><strong>Login</strong></span></a>
               @endif
           </div>
       </div>
   </header>
