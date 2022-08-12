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
            <div class="col-md-3 text-center">
                <div class="shadow rounded-8 p-3 border-success">
                    <div class="">
                        Prepair For Infosys with Mock Test And Quizws And Infosys Previeus Year Solved Paper. <br><br>
                        <button class="btn btn-success btn-md rounded-8">Go To Mock Test</button>
                        <hr>
                        <div class="row">
                            <div class="col border-end"><a href="">Coding</a></div>
                            <div class="col border-end"><a href="">Mcqs</a></div>
                            <div class="col"><a href="">Solution</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout.main.base>
