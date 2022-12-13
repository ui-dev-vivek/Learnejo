@php
    $title = 'Downloads PDFs';
    $image = asset('assets/image/job.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
@endphp
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <!-- ======= Intro Single ======= -->
        <section class="breadcrumbs">
            <div class="container">
                {{-- <h1 class="text-center"></h1> --}}
            </div>

        </section>
    </x-slot>
    <br><br>
    <div class="container-fluid">
        <div class="row">
            @forelse ($getPDF as $pdf)
                <div class="col-md-4">
                    <div class="rounded shadow p-1 m-1">
                        <div class="bg-warning text-white text-center rounded-top pt-2 pb-1">
                            <h1 class="h3">{{ $pdf->title }}</h1>

                        </div>
                        @php
                            echo $pdf->content;
                        @endphp
                    </div>
                    <div class="bg-warning p-2 rounded-bottom">
                        <div class="row">
                            <div class="col-6 text-center">
                                <i class="fa fa-inr"> </i> {{ $pdf->price }}
                            </div>
                            <div class="col-6 text-center">
                                <a href="{{ $pdf->file_path }}">Download Now</a>
                            </div>
                        </div>



                    </div>
                </div>

            @empty
            @endforelse



        </div>
    </div>
</x-layout.main.base>


<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
    var options = {
        "key": "rzp_test_GbeYE8650HETh2", // Enter the Key ID generated from the Dashboard
        "amount": "50000", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
        "currency": "INR",
        // "name": "Acme Corp",
        "description": "Python Interview Question Answers.",
        // "image": "https://example.com/your_logo",
        // "order_id": "hi", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
        "handler": function(response) {
            // alert(response.razorpay_payment_id);
            // alert(response.razorpay_order_id);
            // alert(response.razorpay_signature)
            alert("Success");
        },
        "prefill": {
            "name": "Anshika Singh",
            "email": "anshika@gmail.com",
            "contact": "7071023897"
        },
        "notes": {
            "address": "Razorpay Corporate Office"
        },
        "theme": {
            "color": "#32c552"
        }
    };
    var rzp1 = new Razorpay(options);
    rzp1.on('payment.failed', function(response) {
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
    });
    document.getElementById('rzp-button1').onclick = function(e) {
        rzp1.open();
        e.preventDefault();
    }
</script>
