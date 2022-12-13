@php
    $title = 'Learnejo:Courses';
    $image = asset('assets/image/icon.jpg');
    $description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';
    
@endphp
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">
@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">

    <x-slot name='hero'>
        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <h2 class="h2">MCQs:</h2>
                    <div class="col-8">
                        <div class="title-single-box">
                            <h2>{{ $heading[0]->name }}</h2>

                        </div>
                    </div>

                </div>
            </div>
        </section><!-- End Intro Single-->
    </x-slot>
    <section>
        <div class="row">
            <div class="col-sm-9">
                <div class="p-1">
                    @php
                        $i = 0;
                    @endphp
                    @foreach ($heading[0]->Question as $que)
                        <h6 class="h6"><span>{{ ++$i }}. {{ $que->question }}</span></h6>
                        <div class="px-3">
                            <div class="form-check {{ $que->id }}  mb-1">
                                <input onchange="mcqOnChange('{{ $que->id }}','1','{{ $que->true_is }}')"
                                    id="{{ $que->id }}" name="{{ $que->id }}" type="radio"
                                    class="form-check-input" value="1" />
                                <label id="_label" class="form-check-label" for="">
                                    <span class="option1{{ $que->id }}">(a)
                                        {{ $que->option_i }}</span>
                                    <span class="false1{{ $que->id }} text-danger d-none"><i
                                            class="fa fa-times-circle-o" aria-hidden="true"></i></span>
                                    <span class="true1{{ $que->id }} text-success d-none"><i
                                            class="fa fa-check-circle-o" aria-hidden="true"></i></span></label>
                            </div>
                            <div class="form-check {{ $que->id }} mb-1">
                                <input onchange="mcqOnChange('{{ $que->id }}','2','{{ $que->true_is }}')"
                                    id="{{ $que->id }}" name="{{ $que->id }}" type="radio"
                                    class="form-check-input" value="2" />
                                <label id="_label" class="form-check-label" for="">
                                    <span class="option2{{ $que->id }}">(b)
                                        {{ $que->option_ii }}</span>
                                    <span class="false2{{ $que->id }} text-danger d-none"><i
                                            class="fa fa-times-circle-o" aria-hidden="true"></i></span>
                                    <span class="true2{{ $que->id }} text-success d-none"><i
                                            class="fa fa-check-circle-o" aria-hidden="true"></i></span></label>
                            </div>
                            <div class="form-check {{ $que->id }} mb-1">
                                <input onchange="mcqOnChange('{{ $que->id }}','3','{{ $que->true_is }}')"
                                    id="{{ $que->id }}" name="{{ $que->id }}" type="radio"
                                    class="form-check-input" value="3" />
                                <label id="_label" class="form-check-label" for="">
                                    <span class="option3{{ $que->id }}">(c)
                                        {{ $que->option_iii }}</span>
                                    <span class="false3{{ $que->id }} text-danger d-none"><i
                                            class="fa fa-times-circle-o" aria-hidden="true"></i></span>
                                    <span class="true3{{ $que->id }} text-success d-none"><i
                                            class="fa fa-check-circle-o" aria-hidden="true"></i></span></label>
                            </div>
                            <div class="form-check {{ $que->id }} mb-1 h6">
                                <input onchange="mcqOnChange('{{ $que->id }}','4','{{ $que->true_is }}')"
                                    id="{{ $que->id }}" name="{{ $que->id }}" type="radio"
                                    class="form-check-input" value="4" />
                                <label id="_label" class="form-check-label" for="">
                                    <span class="option4{{ $que->id }}">(d)
                                        {{ $que->option_vi }}</span>
                                    <span class="false4{{ $que->id }} text-danger d-none"><i
                                            class="fa fa-times-circle-o" aria-hidden="true"></i></span>
                                    <span class="true4{{ $que->id }} text-success d-none"><i
                                            class="fa fa-check-circle-o" aria-hidden="true"></i></span></label>
                            </div>
                        </div>
                        <a href="javascript:void(0)" class=" showbtn{{ $que->id }} "
                            onclick="mcqOnChange('{{ $que->id }}','0','{{ $que->true_is }}')"> Show
                            Answer</a>
                        <div class="d-none {{ $que->id }} p-3 border border-success rounded ">
                            <b class="text-primary">Explain:</b> Answer is option <b>{{ $que->true_is }}</b>.
                            <p>{{ $que->brief_explain }}</p>

                        </div>
                        <hr>
                    @endforeach
                </div>
            </div>

            <div class="col-sm-3 p-3 pt-3 shadow">
                @foreach ($headings as $hed)
                    <h5>{{ $hed->name }}</h5>
                    <hr>
                    <ul>
                        @foreach ($hed->mcqHeading as $h)
                            <li><a href="{{ $h->prama_link }}"> {{ $h->name }} Mcqs.</a>
                            </li>
                        @endforeach
                    </ul>
                @endforeach
            </div>
        </div>
    </section>

    {{-- <x-mocktest.listing /> --}}
</x-layout.main.base>
