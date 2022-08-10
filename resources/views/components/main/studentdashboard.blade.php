 <!-- ======= Property Search Section ======= -->
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

             <form action="{{ url('/Student-Login') }}" method="post" id="studentLogin" class="">
                 <div class="shadow rounded border p-3 text-center">
                     <h2 class="h2 text-centre">Students Login</h2>
                     <hr class="bg-success">
                     <div class="d-none text-center text-success studentLoginLoader"><br><br>
                         <i class="fa fa-spinner fa-pulse fa-3x fa-fw"></i> <br><br>
                     </div>

                     <div class="studentForm">

                         @csrf
                         <input onclick="onClickhide();" name="email" class="form-control border border-success mt-2"
                             type="text" placeholder="Email id:">
                         <input onclick="onClickhide();" name="password" class="form-control border border-success mt-2"
                             type="password" placeholder="Password:">
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
             </form>



         </main>
     </section>
 </div>
 <script>
     function onClickhide() {
         $('#massage').html(" ");
     }
 </script>
