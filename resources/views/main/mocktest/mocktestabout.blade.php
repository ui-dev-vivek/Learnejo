@php
$title = 'Learnejo: Mock Test';
$image = asset('assets/image/icon.jpg');
$description = 'Get Free Mock Test For Prepretion';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <br><br><br> <br>
        <div class="container">
            <h1 class="h-success">{{ $getAbout->title }}</h2>
        </div>

    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <br>
                <p class="text-justify  table-responsive">
                    @php
                        $Contant = str_replace('<table', '<table class="table table-striped table-hover" ', $getAbout->content);
                        // $Contant = str_replace('<thead', '<thead class="thead-dark" ', $Contant);
                        echo $Contant;
                        
                    @endphp
                </p>
            </div>
            <div class="col-md-3 ">
                <div class="shadow rounded-8 p-3 border-success">
                    <div class="">
                        {{ $getAbout->title }}. <br><br>
                        <div class="text-center">
                            <a href="#"
                                class="btn btn-info p-2 hvr-sweep-to-right hvr-icon-wobble-horizontal border border-success">Go
                                To
                                Mock Test <i class="fa fa-arrow-right hvr-icon"> </i></a>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col border-end"><a href="">Coding</a></div>
                            <div class="col border-end"><a href="">Mcqs</a></div>
                            <div class="col"><a href="">Solution</a></div>
                        </div>
                    </div>
                </div>
                <br>
                <div class="shadow p-1">
                    <video controls loop class="rounded-8" width="100%" id="video">
                        <source src="{{ asset('video/intro.mp4') }}" type="video/mp4">
                    </video>


                </div>
            </div>
        </div>
    </div>
</x-layout.main.base>
