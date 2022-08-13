<x-layout.admin.base>



    <x-admin.maincard : title="Add Mock Test">
        <x-admin.box>
            <form action="" method="POST" id="addmockTest">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="pramaLink" type="text" required placeholder="PramaLink">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="name" type="text" required
                            placeholder="Mock Test Name:">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="image" type="text" required placeholder="Image Url">
                    </div>
                    <div class="col-sm-6">
                        <select class="form-control m-1" name="type" id="">
                            <option value="">Select Type</option>
                            <option value="T">Technical</option>
                            <option value="NT">Non Technical</option>
                        </select>
                    </div>
                </div>
                <p class="text-right mt-3"> <input class="btn btn-sm btn-success" type="submit" value="Add Mock Test">
                </p>
            </form>
        </x-admin.box>
    </x-admin.maincard>
</x-layout.admin.base>
