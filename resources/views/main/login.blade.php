@php
    $title = 'Student Login';
    $image = asset('assets/image/home.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'> <br> <br><br>
    </x-slot>
    <div class="container text-justify">

        <div class="m-3">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="shadow p-3 rounded-8 border border-success text-center">
                        <h3 class="h3">Welcome back!</h3>
                        <small class="text-success"><strong>Please Login With Google.</strong></small>

                        <a class="border border-info" href="">Sigh With Google</a>

                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </div>
</x-layout.main.base>
