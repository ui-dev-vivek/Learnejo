@php
$title = 'Learnejo: Mock Test';
$image = asset('assets/image/icon.jpg');
$description = 'Get Free Mock Test For Prepretion';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <br><br><br> <br>
        <div class="container">
            <h2 class="text-success">Infosys Previous Papers with Solutions PDF</h2>
        </div>

    </x-slot>
    <div class="container-fluid" style="height: 1200px;">
        <div class="row">
            <div class="col-sm-9"></div>
            <div class="col-sm-3 text-center">
                <div class="shadow rounded-8 p-3 border border-success">
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
