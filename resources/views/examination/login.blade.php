<x-layout.examination.base>

    <section class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="text-center p-5 shadow border m-2 rounded-8">
                    <h1 class="h1">Students Login</h1> <small>For Online Assessment.</small>
                    <hr><br>
                    {{-- {{ session('fromLoginRequest') }} --}}
                    <form id="examination-login">
                        <input class="form-control border border-success mb-3 p-3 h1" type="email"
                            placeholder="Emain id:" required>
                        <input class="form-control border border-success mb-2 p-3 h1" type="password"
                            placeholder="Password:" required>
                        <div class="row">
                            <div class="col-7">
                                <div class="massage"></div>
                            </div>
                            <div class="col-5">
                                <p class="text-end">
                                    <button type="submit"
                                        class="btn btn-info hvr-sweep-to-right hvr-icon-wobble-horizontal">Login &nbsp;
                                        <i class="fa fa-sign-in hvr-icon" aria-hidden="true"></i></button>
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
</x-layout.examination.base>
