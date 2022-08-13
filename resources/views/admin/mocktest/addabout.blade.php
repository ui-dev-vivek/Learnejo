<x-layout.admin.base>

    <x-admin.box>
        <form action="" method="POST" id="updatemockTest">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <input type="hidden" name="id" value="{{ $mockTest->id }}">
                    <input class="form-control m-1" name="pramaLink" type="text" value="{{ $mockTest->prama_link }}">
                </div>
                <div class="col-sm-6">
                    <input class="form-control m-1" name="name" type="text" value="{{ $mockTest->name }}">
                </div>
                <div class="col-sm-6">
                    <input class="form-control m-1" name="image" type="text" value="{{ $mockTest->image }}">
                </div>
                <div class="col-sm-6">
                    <select class="form-control m-1" name="type" id="">
                        <option value="">Select Type</option>
                        <option value="T">Technical</option>
                        <option value="NT">Non Technical</option>
                    </select>
                </div>
            </div>
            <p class="text-right mt-3"> <input class="btn btn-sm btn-success" type="submit" value="Update"></p>
        </form>
    </x-admin.box>

    <x-admin.maincard : title="Add Mock Test About">
        <p class="loader text-right d-none"><i class="fa fa-spinner text-success fa-pulse fa-fw"></i></p>
        <form action="/Admin/About-Mock-Test" id="About-Mock-Test" method="POST">
            @csrf

            <input class="form-control mb-2" type="hidden" name="pramaLink" value="{{ $getAbout->prama_link }}"
                required placeholder="Prama Link">

            <input class="form-control mb-2" name="title" value="{{ $getAbout->title }}" type="text"
                placeholder="Title" required>

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
