<x-layout.admin.base>

    <x-admin.box>
        @if ($message = Session::get('massage'))
            <small class="p-1"><strong>{{ $message }}</strong></small>
        @endif
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data">

            <div class="row">
                @csrf
                <div class="col-sm-5 p-1">
                    <input type="file" class="form-control" name="image" required>
                </div>
                <div class="col-sm-5 p-1">
                    <input type="text" class="form-control" name="name" required placeholder="Name:">
                </div>
                <div class="col-sm-2 p-1  text-centre">
                    <input type="submit" class="btn btn-sm btn-success" value="Upload">
                </div>
            </div>
        </form>
    </x-admin.box>

    <x-admin.maincard : title="Whatsapp Group Managment">
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Image</th>
                            <th>Name</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($getImages as $image)
                            <tr class="tr{{ $image->id }}">
                                <td>{{ $sr }}</td>
                                <td> <img class="img-fluid" width="60" src="{{ url('/') }}/{{ $image->url }}"
                                        alt=""> </td>
                                <td>{{ $image->name }}</td>
                                <input class="d-none" type="text" value="{{ $image->url }}"
                                    id="url{{ $image->id }}">
                                <td>
                                    <a class="btn btn-sm view{{ $image->id }}  btn-my-sm  btn-info"
                                        href="{{ url('/') }}/{{ $image->url }}" target="_blank">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-sm    btn-my-sm  btn-info " href="javascript:void(0)"
                                        onclick="copyurl('{{ $image->id }}')">
                                        <i class="fa fa-copy cid{{ $image->id }}" aria-hidden="true"></i>
                                        <i class="fa fa-check d-none bid{{ $image->id }}""></i></a>

                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $image->id }},'{{ csrf_token() }}','images');">
                                        <i class="fa fa-trash did{{ $image->id }}" aria-hidden="true"></i>
                                    </a>
                                </td>




                                @php
                                    $sr = $sr + 1;
                                @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>
    <script>
        function copyurl(id) {

            var copyText = document.getElementById("url" + id);
            // Select the text field
            copyText.select();
            copyText.setSelectionRange(0, 99999); // For mobile devices

            // Copy the text inside the text field
            navigator.clipboard.writeText(copyText.value);
            $('.cid' + id).addClass('d-none');
            $('.bid' + id).removeClass('d-none');

        }
    </script>
</x-layout.admin.base>
