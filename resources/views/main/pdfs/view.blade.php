@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$PDF->title" :image="$PDF->title" :description="$PDF->title">

    <x-slot name='hero'>
        <br><br><br>

    </x-slot>
    <div class="container-fluid">

        <div class="shadow p-3 ps-5 rounded-8">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="h2">{{ $PDF->title }}</h2>
                    <p class="text-start">
                        @php
                            echo $PDF->content;
                        @endphp
                    </p>

                </div>
                <div class="col-md-6">
                    <div class="p-3">
                        <h3 class="h3">
                            Ammount: <i class="fa fa-inr"> </i> {{ $PDF->price }}
                        </h3>
                        <div>
                            @if ($status == 'Panding')
                                <form action='https://test.payu.in/_payment' method='post'>
                                    <input type="hidden" name="key" value="gtKFFx" />
                                    <input type="hidden" name="txnid" value="ASG7FDC875BHL" />
                                    <input type="hidden" name="productinfo" value="Wipro Question Solutions PDF" />
                                    <input type="hidden" name="amount" value="10" />
                                    <input type="hidden" name="email" value="dev.vivek16@gmail,com" />
                                    <input type="hidden" name="firstname" value="Anshika" />
                                    <input type="hidden" name="lastname" value="Singh" />
                                    <input type="hidden" name="surl"
                                        value="http://127.0.0.1:8000/PDF/Payment/1/Success" />
                                    <input type="hidden" name="furl"
                                        value="http://127.0.0.1:8000/PDF/Payment/1/Falied" />
                                    <input class="form-control m-1 w-50 text-center" type="text" name="phone"
                                        placeholder="Enter Mobile Number" required />
                                    <input type="hidden" name="hash"
                                        value="e0179be166c3aae14e4a924dad281faa361d256f25d2692f8465cc94ceace462d91ee6e2a768a533969c2f7f61efbd20a4a4992562c56eceb8970e7bedb0aad7" />
                                    <input class="btn btn-info btn-md" type="submit" value="Make Payment">
                                </form>
                            @endif
                            @if ($status == 'Success')
                                Success
                            @endif
                            @if ($status == 'Falied')
                                Falied
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</x-Layout.Main.Base>
