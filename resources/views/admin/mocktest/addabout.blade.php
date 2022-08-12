<x-layout.admin.base>

    <x-admin.maincard : title="Add Mock Test About">
        <p class="loader text-right d-none"><i class="fa fa-spinner text-success fa-pulse fa-fw"></i></p>
        <form action="/Admin/About-Mock-Test" id="About-Mock-Test" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm">
                    <input class="form-control mb-2" type="text" name="pramaLink" value="{{ $getAbout->prama_link }}"
                        required placeholder="Prama Link">
                </div>
                <div class="col-sm">
                    <input class="form-control mb-2" name="title" value="{{ $getAbout->title }}" type="text"
                        placeholder="Title" required>
                </div>
            </div>
            <textarea class="form-control m-1" name="content" id="summernote">{{ $getAbout->content }}</textarea>

            <p class="text-right"> <br>
                <input id="submitnow" type="submit" class="btn btn-sm btn-success">
            </p>
        </form>
    </x-admin.maincard>
    <div class="fixed-bottom">
        <div class="massage"></div>
    </div>
</x-layout.admin.base>
