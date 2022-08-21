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


    <x-admin.maincard : title="Add Mock Test Sub Topic">
        <x-admin.box>
            <form action="" method="POST" id="addmockTestSubTopic">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <select class="form-control m-1" name="mockTestId" id="">
                            <option value="">Select Mock Test</option>
                            @forelse ($getMockTest as  $mockTest)
                                <option value="{{ $mockTest->id }}">{{ $mockTest->name }}</option>
                            @empty
                                <option value="">No Mock Test</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="pramaLink" type="text" required
                            placeholder="Sub Topic PramaLink">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="name" type="text" required
                            placeholder="Sub Topic Name:">
                    </div>

                </div>
                <p class="text-right mt-3"> <input class="btn btn-sm btn-success" type="submit"
                        value="Add Mock Test Sub Topic">
                </p>
            </form>
        </x-admin.box>
    </x-admin.maincard>

    <x-admin.maincard : title="Add Mock Test Heading">
        <x-admin.box>
            <form action="" method="POST" id="addmockTestHeading">
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <select class="form-control m-1" name="mockTestId" onchange="getSubTopic('{{ csrf_token() }}')"
                            id="mockTestId">
                            <option value="">Select Mock Test</option>
                            @forelse ($getMockTest as  $mockTest)
                                <option value="{{ $mockTest->id }}">{{ $mockTest->name }}</option>
                            @empty
                                <option value="">No Mock Test</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="col-sm-6 subTopic"></div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="pramaLink" type="text" required
                            placeholder="Sub Topic PramaLink">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="name" type="text" required
                            placeholder="Sub Topic Name:">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="timing" type="text" required
                            placeholder="Timing 10:10">
                    </div>
                    <div class="col-sm-6">
                        <input class="form-control m-1" name="number" type="text" required
                            placeholder="Number Of Question:">
                    </div>

                </div>
                <p class="text-right mt-3"> <input class="btn btn-sm btn-success" type="submit"
                        value="Add Mock Test Sub Topic">
                </p>
            </form>
        </x-admin.box>
    </x-admin.maincard>
</x-layout.admin.base>
