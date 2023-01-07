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
                    <form id="comment-form">
                        @csrf
                        <input type="hidden" name="pramaLink" value="{{ $blog->prama_link }}">
                        <textarea id="comment-area" class="border border-success form-control" name="comment" id="" cols="10"
                            rows="3" required></textarea>
                        <p class="text-end pt-2">
                            <button type="submit" class="btn btn-md btn-success"><span
                                    class="comment-submit-btn">Submit</span>
                                <span class="loading d-none"> <i
                                        class="fa fa-spinner fa-spin fa-1x fa-fw"></i></span></button>
                        </p>
                    </form>
                    <h4 class="h4">Comments: </h4>
                    <hr>
                    <div class="comment-area"></div>
                    @forelse ($getComments as $comment)
                        <img class="rounded-circled  border border-success" width="30" src="{{ $comment->image }}"
                            alt=""> <strong> {{ $comment->name }}</strong>
                        <p class="ps-4 m-2"><small>{{ $comment->comment }}</small></p>
                        <br>
                    @empty
                        <h5>No Any Comments!</h5>
                    @endforelse




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
        <script src="{{ asset('assets/ajax/comment.js') }}"></script>
    @stop

</x-layout.main.base>
