@php

$image = asset('assets/image/icon.jpg');
$description = 'Get Free Mock Test For Prepretion';

@endphp
<x-layout.main.base :title="$getPages->title" :image="$getPages->image" :description="$getPages->description">
    <x-slot name='hero'>
        <br><br><br> <br>
        <div class="container">
            <h1 class="h-success">{{ $getPages->title }}</h2>
        </div>

    </x-slot>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <br>
                <p class="text-justify  table-responsive">
                    @php
                        $Contant = str_replace('<table', '<table class="table table-striped table-hover" ', $getPages->contant);
                        // $Contant = str_replace('<thead', '<thead class="thead-dark" ', $Contant);
                        echo $Contant;
                        
                    @endphp
                </p>
            </div>
            <div class="col-md-3 text-center p-1">
                @php
                    echo $getPages->side_contant;
                    
                @endphp
            </div>
        </div>
    </div>
</x-layout.main.base>
