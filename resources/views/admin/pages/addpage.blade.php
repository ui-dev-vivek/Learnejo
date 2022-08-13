<x-layout.admin.base>
    <x-admin.maincard : title="Add Pages">
        <p class="loader text-right d-none"><i class="fa fa-spinner text-success fa-pulse fa-fw"></i></p>
        <form action="" id="addPages" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <input class="form-control mb-2" name="pramaLink" required placeholder="Prama Link"
                        value="{{ $pages->prama_link ?? 'Prama Link:' }}">
                </div>
                <div class="col-sm-6">
                    <input class="form-control mb-2" name="title" value="{{ $pages->title ?? 'Title:' }}"
                        type="text" placeholder="Title" required>
                </div>
            </div>
            <input type="text" class="form-control m-2" name="description"
                value="{{ $pages->description ?? 'Description:' }}" placeholder="Description:" required>
            <input class="form-control m-2" type="text" name="image" placeholder="Image Url"
                value="{{ $pages->image ?? 'Image Url:' }}">

            <textarea class="form-control m-1" name="contant" id="full-featured">{{ $pages->contant ?? 'Page Content:' }}</textarea>
            <br>
            <textarea class="form-control m-1" name="sideContant" id="full-featured">{{ $pages->side_contant ?? 'Side Content:' }}</textarea>

            <p class="text-right"> <br>
                <input id="submitnow" type="submit" class="btn btn-sm btn-success">
            </p>
        </form>
    </x-admin.maincard>
</x-layout.admin.base>
