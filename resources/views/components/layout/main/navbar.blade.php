   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
       <div class="container d-flex align-items-center">

           <h1 class="logo me-auto"><a href="/"><img src="{{ asset('assets/image/logo-dark.png') }}"
                       alt=""></a></h1>
           {{-- <span class="name text-primary"></span></a></h1> --}}
           <!-- Uncomment below if you prefer to use an image logo -->
           <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

           <nav id="navbar" class="navbar order-last order-lg-0">
               <ul>
                   <li><a href="{{ url('/') }}" class="">Home</a></li>

                   <li class="dropdown dropdown-prepare"><a href="javascript:void(0)"><span>Prepare</span> <i
                               class="bi bi-chevron-down"></i></a>
                       <ul>
                           <li class="text-center"><a href="javascript:void(0);" onclick="alert('Comming Soon!');"
                                   class=""><strong>'O' Level Python 21 Days
                                       Course.</strong></a></li>
                           <div class="row">

                               @forelse ($topic as $itam)
                                   <div class="col-sm-6">
                                       <li><a class="text-start"
                                               href="{{ url('Prepare') }}/{{ $itam->prama_link }}"><img width="20"
                                                   class="rounded" src="{{ $itam->image }}" alt="">
                                               {{ $itam->name }}</a>
                                       </li>
                                   </div>
                               @empty
                                   <li><a href="javascript:void(0);">Not Found!</a></li>
                               @endforelse
                           </div>
                       </ul>
                   </li>


                   <li class="dropdown"><a href="{{ url('/Courses') }}"><span>Courses</span> <i
                               class="bi bi-chevron-down"></i></a>
                       <ul>
                           @forelse ($coursesCatg as $itam)
                               <li><a href="{{ url('Courses/Category') }}/{{ $itam->catg }}">{{ $itam->catg }}</a>
                               </li>
                           @empty
                               <li><a href="javascript:void(0);">Not Found!</a></li>c
                           @endforelse
                       </ul>
                   </li>



                   </li>

                   <li><a href="{{ url('/Mock-Test') }}"><span>Mock Test</span> <i class="bi bi-chevron-down"></i></a>
                   </li>
                   <li class="dropdown"><a href="javascript:void(0);"><span>Job-Internships</span> <i
                               class="bi bi-chevron-down"></i></a>
                       <ul>

                           <li><a href="{{ url('/Job-Internships') }}">Jobs</a>
                           </li>
                           <li><a href="{{ url('/Internships') }}">Internships</a> </li>
                           {{-- <li><a href="{{ url('/Jobs/Non-IT') }}">Non-IT Jobs</a>
                           </li>
                           <li><a href="{{ url('/Jobs/Govt') }}">Governments Jobs</a>
                           </li> --}}
                       </ul>
                   </li>
                   <li><a href="{{ url('/Pricing') }}" class="">Pricing</a></li>


                   {{-- <li><a href="{{ url('/About-Us') }}">About</a></li> --}}

                   {{-- <li><a href="{{ url('/Contact-Us') }}">Contact</a></li> --}}
               </ul>
               <i class="bi bi-list mobile-nav-toggle"></i>
           </nav><!-- .navbar -->
           <div class="header-social-links d-flex">
               @if (Session::has('StudentId'))
                   @php
                       $studentName = explode(' ', $student->Name);
                   @endphp
                   <a class="navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                       data-bs-target="#navbarTogglerDemo01">
                       <img width="25" src="" class="rounded-circle border border-success "> &nbsp;
                       {{ $studentName[0] }}

                   </a>
               @else
                   <a type="button" class=" navbar-toggle-box navbar-toggle-box-collapse" data-bs-toggle="collapse"
                       data-bs-target="#navbarTogglerDemo01"> <span class="loginbtn bg-success text-white">
                           <i class="fa fa-user text-white"> </i><b> Login</b></span>
                   </a>
               @endif





           </div>
       </div>
   </header>
