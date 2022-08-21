@php
$title = 'Learnejo:Courses';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <style>

    </style>
    <x-slot name='hero'>
        <section class="intro-single">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h2 class="h1 h-success">{{ $getMockTest[0]->name }} Mock Test</h2>
                        <hr><br>
                    </div>
                </div>
            </div>
        </section>
    </x-slot>
    <div class="container">
        <article class="tabs content--flow">

            <aside class="sidebar">
                <nav role="tablist" class="tab__navigation">
                    @php
                        $id = 1;
                    @endphp

                    @forelse ($getMockTest[0]->mockTestSubTopic as $topic)
                        @if ($id == 1)
                            <button role="tab" aria-selected="true" class="tab__button" id="{{ $id++ }}">
                                <span class="icon__for--tab">
                                    <i class="fa fa-eercast"></i>
                                </span>
                                <span class="text__for--tab text-center h2">{{ $topic->name }} </span>
                            </button>
                        @else
                            <button role="tab" aria-selected="false" class="tab__button" id="{{ $id++ }}">
                                <span class="icon__for--tab">
                                    <i class="fa fa-eercast"></i>
                                </span>
                                <span class="text__for--tab text-center h2">{{ $topic->name }} </span>
                            </button>
                        @endif

                    @empty
                        <div class="h5">There Are No Any Mock Test.</div>
                    @endforelse
                </nav>
            </aside>
            <main class="content__area">
                <div class="tab__content">
                    @php
                        $idx = 1;
                    @endphp

                    @forelse ($getMockTest[0]->mockTestSubTopic as $topic)
                        @if ($idx == 1)
                            <div role="tabpanel" aria-labelledby="{{ $idx++ }}">
                                <h1 class="title border-bottom mb-1 ">{{ $getMockTest[0]->name }}
                                    {{ $topic->name }}
                                    Mock Test
                                </h1>
                                <span class="span-tag"></span>
                                <p class="text">
                                <div class="p-2" style="width: 100vh;">
                                    @forelse ($topic->mockTestHeading as $heading)
                                        <div class="ls-box z-depth-5" data-aos="zoom-in" data-aos-delay="30">

                                            <div class="row">
                                                <div class="col-1 ps-2 text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/image/mocklogo.jpg') }}" alt="">
                                                </div>
                                                <div class="col-md-9">

                                                    <div class="preparations-section-bar">
                                                        <div class="row">
                                                            <div class="col-9 ps-4"> <a
                                                                    href="{{ url('/Examination-Rules') }}/{{ $getMockTest[0]->prama_link }}/{{ $heading->prama_link }}"
                                                                    target="_blank">

                                                                    <h4> <strong class="text-start">
                                                                            {{ $heading->name }}</strong>
                                                                    </h4>
                                                                </a> </div>
                                                            <div class="col-3">
                                                                <div class="flex">
                                                                    <p class="new-analytics-completion"><span
                                                                            class="mont-bold">30 Points
                                                                            {{-- </span><br><small>Points</small> --}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            {{-- <div class="col-1 text-center">

                                                            </div> --}}
                                                            <div class="col-12 text-end  ">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 30%;" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-1 text-center">
                                                    <a class="p-1 rounded border border-success hvr-sweep-to-right ps-2 pe-2 hvr-icon-wobble-horizontal"
                                                        href="{{ url('/Examination-Rules') }}/{{ $getMockTest[0]->prama_link }}/{{ $heading->prama_link }}"
                                                        target="_blank">Start <i
                                                            class="fa fa-angle-double-right hvr-icon"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                    @empty
                                        <h4>Comming Soon.....</h4>
                                    @endforelse

                                </div>

                                </p>
                            </div>
                        @else
                            <div role="tabpanel" aria-labelledby="{{ $idx++ }}" hidden>
                                <h1 class="title border-bottom mb-1 ">{{ $getMockTest[0]->name }}
                                    {{ $topic->name }}
                                    Mock Test</h1>

                                <span class="span-tag"></span>

                                <p class="text">
                                <div class="p-1" style="width: 100vh;">
                                    @forelse ($topic->mockTestHeading as $heading)
                                        <div class="ls-box z-depth-5" data-aos="zoom-in" data-aos-delay="30">

                                            <div class="row">
                                                <div class="col-1 ps-2 text-center">
                                                    <img class="img-fluid"
                                                        src="{{ asset('assets/image/mocklogo.jpg') }}" alt="">
                                                </div>
                                                <div class="col-md-9">

                                                    <div class="preparations-section-bar">
                                                        <div class="row">
                                                            <div class="col-9 ps-4"> <a
                                                                    href="{{ url('/Examination-Rules') }}/{{ $getMockTest[0]->prama_link }}/{{ $heading->prama_link }}"
                                                                    target="_blank">

                                                                    <h4> <strong class="text-start">
                                                                            {{ $heading->name }}</strong>
                                                                    </h4>
                                                                </a> </div>
                                                            <div class="col-3">
                                                                <div class="flex">
                                                                    <p class="new-analytics-completion"><span
                                                                            class="mont-bold">30 Points
                                                                            {{-- </span><br><small>Points</small> --}}
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            {{-- <div class="col-1 text-center">

                                                        </div> --}}
                                                            <div class="col-12 text-end  ">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 30%;" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="col-md-2 pt-1 text-center">
                                                    <a class="p-1 rounded border border-success hvr-sweep-to-right ps-2 pe-2 hvr-icon-wobble-horizontal"
                                                        href="{{ url('/Examination-Rules') }}/{{ $getMockTest[0]->prama_link }}/{{ $heading->prama_link }}"
                                                        target="_blank">Start <i
                                                            class="fa fa-angle-double-right hvr-icon"
                                                            aria-hidden="true"></i></a>
                                                </div>
                                            </div>

                                        </div>

                                    @empty
                                        <h4>Comming Soon.....</h4>
                                    @endforelse

                                </div>
                                </p>
                            </div>
                        @endif

                    @empty
                        <div class="h5">There Are No Any Mock Test.</div>
                    @endforelse



                </div>
            </main>
        </article>
    </div>

    <br><br>

    <script>
        const buttons = document.querySelectorAll('[role="tab"]');
        const tabPanel = Array.from(document.querySelectorAll('[role="tabpanel"]'));

        function hideTabContent(e) {
            tabPanel.forEach((panels) => {
                panels.hidden = true;
            });
            buttons.forEach((tab) => {
                tab.setAttribute("aria-selected", false);
            });
            e.currentTarget.setAttribute("aria-selected", true);

            const {
                id
            } = event.currentTarget;
            const tabPanels = tabPanel.find(
                (tabContent) => tabContent.getAttribute("aria-labelledby") === id
            );
            tabPanels.hidden = false;
        }
        buttons.forEach((button) => button.addEventListener("click", hideTabContent));
    </script>
</x-layout.main.base>
