@php
$title = 'Learnejo:Refund';
$image = asset('assets/image/icon.jpg');
$description = 'Learnejo is an E-learning platform, for every student interested and wishes to prepare for Tech and non-Tech. This platform contains all the important topics and articles related to Tech and Non-Tech. With the help of which you can enhance your skills and knowledge as well as enhance your career.';

@endphp
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <section class="breadcrumbs">
            <div class="container">
                <h1 class="text-center">Refund and Cancellations</h1>

            </div>
        </section><!-- End Breadcrumbs -->
    </x-slot>
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">
            <p>Learnejo renders services including but not limited to counseling, assessment tests etc, which act as a
                bonafide guide to the user and the services are rendered as soon as availed, therefore there is no
                provision for refund of fee paid by the User/s. The user/s is therefore deemed to have understood and
                accepted that once any amount is paid to The Inseparable as per the services availed, there shall be no
                refund of the said amount.But surely you can contact <b>learnejo@gmail.com</b> we will hear you</p>
        </div>
    </section>

</x-layout.main.base>
