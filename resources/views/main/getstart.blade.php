@php
    $title = 'Get Start';
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
        <div class="row">
            <div class="col-md-6 bg-success">
                <div class="pt-5 text-center">
                    <h1 class="h1 text-white">
                        AI Mock-Test

                    </h1>
                </div>

            </div>
            <div class="col-md-6">

            </div>
        </div>


    </div>
</x-layout.main.base>
