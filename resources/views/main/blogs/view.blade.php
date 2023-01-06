@php
    $title = $blog->title;
    $image = url('/') . '/' . $blog->mobile_image;
    $description = $blog->sort_desc;
    $ads = '<ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                        data-ad-slot="2511322819" data-ad-format="auto" data-full-width-responsive="true"></ins>
                    <script>
                        (adsbygoogle = window.adsbygoogle || [])
                        .push({});
                    </script>';
@endphp
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/hover.css') }}">

@stop
<x-layout.main.base :title="$title" :image="$image" :description="$description">
    <x-slot name='hero'>
        <br>
        <p class="p-2"></p>
        <img class="img-fluid" src="{{ url('/') }}/{{ $blog->long_image }}" alt="">
    </x-slot>

    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <br>
                <h2 class="h1 text-success">
                    {{ $blog->title }}
                </h2>
                <span class="text-white ps-2 pe-2 rounded bg-success"><strong>{{ $blog->catg }}</strong></span>
                <span class="text-white ps-2 pe-2 rounded bg-info"><strong>Posted:

                        {{ date('M d, Y - H:s A', strtotime($blog->created_at)) }}</strong></span>
                <hr>
                <?php
                $contant = str_replace('adsection', $ads, $blog->content);
                echo $contant;
                ?>
                <div class="ps-5">
                    <blockquote class="blockquote">
                        <p class="mb-4">{{ $blog->title }} <br>
                            <small></small>
                        </p>
                        <footer class="blockquote-footer">
                            <strong>Vivek Kumar Yadav</strong><br>
                            <cite title="Source Title"> &nbsp; &nbsp; &nbsp; <small>Developer Learnejo</small></cite>
                        </footer>
                    </blockquote>
                </div>
                <br>
                <div class="p-2">
                    <h4 class="mb-2 h4">Leave Comment:</h4>
                    <textarea class="border border-success form-control" name="comment" id="" cols="10" rows="3"></textarea>
                    <p class="text-end pt-2">
                        <button class="btn btn-md btn-success">Submit</button>
                    </p>
                    <h4 class="h4">Comments: </h4>
                    <hr>
                    <img class="rounded-circled  border border-success" width="30"
                        src="https://lh3.googleusercontent.com/a/ALm5wu3JMomrqKrQxSgnHfyg4-phfmxpqGJ78OXV9Vua-w=s96-c"
                        alt=""> <strong> Vivek Yadav</strong>
                    <p class="ps-4 m-2"><small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas numquam
                            perspiciatis libero,
                            illum tempore dolorem aperiam assumenda, nihil dicta iusto corporis? Unde dolorum quaerat,
                            inventore expedita quam dolorem quisquam consequuntur!</small></p>
                    <br>
                    <img class="rounded-circled  border border-success" width="30"
                        src="https://lh3.googleusercontent.com/a/ALm5wu3JMomrqKrQxSgnHfyg4-phfmxpqGJ78OXV9Vua-w=s96-c"
                        alt=""> <strong> Vivek Yadav</strong>
                    <p class="ps-4 m-2"><small>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas numquam
                            perspiciatis libero,
                            illum tempore dolorem aperiam assumenda, nihil dicta iusto corporis? Unde dolorum quaerat,
                            inventore expedita quam dolorem quisquam consequuntur!</small></p>




                </div>


            </div>
            <div class="col-md-3">
                <br><br>
                <div class="shadow p-2 text-center">
                    <strong>
                        Prepare for Campus Placements.
                    </strong>
                    <br> <br>
                    <p class="text-center">
                        <a class="rounded border border-success p-2" href="/Mock-Test">Try Mock-Test</a>
                    </p>
                </div>
                <br>
                <div class="shadow p-2 text-center">
                    <strong>
                        Interview Practice With <span class="text-success">AI</span>
                    </strong>
                    <br> <br>
                    <p class="text-center">
                        <a class="rounded border border-success p-2" href="/Mock-Test">Give Interview</a>
                    </p>
                </div>
                <!-- Display-Vertical -->
                <ins class="adsbygoogle" style="display:block" data-ad-client="ca-pub-7119514135532896"
                    data-ad-slot="1712412310" data-ad-format="auto" data-full-width-responsive="true"></ins>
                <script>
                    (adsbygoogle = window.adsbygoogle || []).push({});
                </script>

            </div>
            <br>

        </div>

    </div>
    @section('script')
        <script src="{{ asset('assets/ajax/apply-now.js') }}"></script>
    @stop

</x-layout.main.base>
