@php
$title = 'Learnejo : Join Whatsapp Group';
$image = asset('assets/image/whatsapp-join.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <br><br>
        <section>
            <div class=" text-center">
                <img width="100" class="border border-success p-2 ps-3 pe-3 rounded-circle"
                    src="{{ asset('assets/image/logo.png') }}" alt=""><br>
                <h1 class="pt-2"> {{ $whatsapp->group_name }}</h1>
                <br>
                <a class="p-2 h2 ps-4 pe-4 text-white rounded" style="background: green;" href="javascript:void(0);"
                    onclick="joinWhatsapp('{{ csrf_token() }}')"><i class="fa fa-whatsapp"> </i>
                    Join Group</a>

            </div>
        </section>

    </x-slot>
    @section('script')
        <script src="{{ asset('assets/ajax/join-with-whatsapp.js') }}"></script>
    @stop
</x-layout.main.base>
