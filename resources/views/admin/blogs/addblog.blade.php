<x-layout.admin.base>
    <x-admin.maincard : title="Add Blog">
        <p class="loader text-right d-none"><i class="fa fa-spinner text-success fa-pulse fa-fw"></i></p>
        <form action="" id="addBlog" method="POST">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <input class="form-control m-2" name="pramaLink" required placeholder="Prama Link"
                        value="{{ $blog->prama_link ?? 'Prama Link:' }}">
                </div>
                <div class="col-sm-6">
                    <input class="form-control m-2" name="title" value="{{ $blog->title ?? 'Title:' }}" type="text"
                        placeholder="Title" required>
                </div>
            </div>
            <input type="text" class="form-control m-2" name="sortDesc"
                value="{{ $blog->sort_desc ?? 'Sort-Description:' }}" placeholder="Description:" required>
            <input class="form-control m-2" type="text" name="longImage" placeholder="Image Url"
                value="{{ $blog->long_image ?? 'Long Image Url:' }}">
            <input class="form-control m-2" type="text" name="mobileImage" placeholder="Image Url"
                value="{{ $blog->mobile_image ?? 'Mobile Image Url:' }}">

            <textarea class="form-control m-2" name="content" id="full-featured">{{ $blog->content ?? 'Page Content:' }}</textarea>

            <div class="row">
                <div class="col-sm">
                    <input class="form-control m-2" type="text" name="catg" placeholder="Catg"
                        value="{{ $blog->catg ?? 'Catg:' }}">
                </div>
                <div class="col-sm">
                    <input class="form-control m-2" type="text" name="tags" placeholder="Tags"
                        value="{{ $blog->tags ?? 'tags:' }}">
                </div>
            </div>
            <br>
            <p class="text-right"> <br>
                <input id="submitnow" type="submit" class="btn btn-sm btn-success">
            </p>
        </form>
    </x-admin.maincard>
</x-layout.admin.base>
