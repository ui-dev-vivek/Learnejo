 <div class="click-closed"></div>
 <!--/ Form Search Star /-->
 <div class="box-collapse">
     <div class="title-box-d">
         <h3 class="title-d">Student Dashboard</h3>
     </div>
     <span class="close-box-collapse right-boxed bi bi-x"></span>
     <hr class="bg-success">

     <section class="box-collapse-wrap container-fluid">

         <main id="sideDashboard">

             @if (Session::has('StudentId'))
                 <p class="h3">
                     "Welcome " </p>
             @else
                 <div class="text-center">
                     <p class=""><img class="loginLogo" width="60" src="{{ asset('assets/image/icon.png') }}"
                             alt="">
                     </p>
                     @php
                         $token = 'Fox-' . uniqid() . '-API';
                     @endphp
                     <p id="loginBtn">
                         <a onclick="setToken('{{ $token }}');" class="rounded-8 h4 p-1 ps-2 pe-2">
                             <i class="fa fa-whatsapp"> </i> Login With Whatsapp!</a>
                     </p>
                     <div id="loginMassage" class="text-success h5 text-start"></div>
                     <div id="nameMassage" class="text-primary h5 text-End"></div>
                 </div>
             @endif

             {{-- <form action="{{ url('/Student-Login') }}" method="post" id="studentLogin" class="">
                 <div class="shadow rounded border p-3 text-center">
                     <h2 class="h2 text-centre">Students Login</h2>
                     <hr class="bg-success">
                     <div class="d-none text-center text-success studentLoginLoader"><br><br>
                         <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> <br><br>
                     </div>

                     <div class="studentForm">

                         @csrf
                         <input onclick="onClickhide();" name="email" class="my-input" type="text"
                             placeholder="Email id:">
                         <input onclick="onClickhide();" name="password" class="my-input" type="password"
                             placeholder="Password:">
                         <br>
                         <div class="row">
                             <div class="col-8 pt-2">
                                 <div id="massage"></div>
                             </div>
                             <div class="col-4">
                                 <p class="text-end">
                                     <input type="submit" class="btn btn-success btn-md" value="Login">
                                 </p>
                             </div>
                         </div>


                     </div>


                 </div>
             </form> --}}



         </main>
     </section>
 </div>
 <script>
     function onClickhide() {
         $('#massage').html(" ");
     }
 </script>
