<div class="text-center">


    @if ($data->previousPageUrl())
        <a href="{{ $data->previousPageUrl() }}">
            << Previous</a>
    @endif
    <a class="rounded p-2 ps-4 pe-4 shadoe bg-info" href="#">{{ $data->currentPage() }}</a>
    @if ($data->nextPageUrl())
        <a href="{{ $data->nextPageUrl() }}">Next >> </a>
    @endif

</div>
