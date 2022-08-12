<x-layout.admin.base>

    <x-admin.box>
        <form action="/Admin/Add-Whatsapp-Group" method="post">
            <div class="row">
                @csrf
                <div class="col-sm-5 p-1">
                    <input type="text" class="form-control" name="groupName" required placeholder="Group Name:">
                </div>
                <div class="col-sm-5 p-1">
                    <input type="text" class="form-control" name="link" required placeholder="Group Link:">
                </div>
                <div class="col-sm-2 p-1  text-centre">
                    <input type="submit" class="btn btn-sm btn-success" value="Add">
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
                            <th>Group Name</th>
                            <th>Members</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $sr = 1;
                        @endphp
                        @foreach ($groups as $group)
                            <tr class="tr{{ $group->id }}">
                                <td>{{ $sr }}</td>
                                <td><b>{{ $group->group_name }}</b></td>

                                <td><input class="form-control" id="memberField{{ $group->id }}"
                                        onchange="updateMembers('{{ url('/Admin/updateMembers') }}','{{ csrf_token() }}','{{ $group->id }}');"
                                        type="text" value="{{ $group->members }}"></td>
                                <td>
                                    @if ($group->status)
                                        <a href="javascript:void(0);"
                                            onclick="changeGroupStatus('{{ url('/Admin/changeGroupStatus') }}','{{ csrf_token() }}','{{ $group->id }}');"
                                            class="btn btn-success  status btn-sm"><i class="fa fa-thumbs-up"
                                                aria-hidden="true"></i></a>
                                    @else
                                        <a onclick="changeGroupStatus('{{ url('/Admin/changeGroupStatus') }}','{{ csrf_token() }}','{{ $group->id }}');"
                                            href="javascript:void(0);" class="btn btn-danger status btn-sm"><i
                                                class="fa  fa-thumbs-down" aria-hidden="true"></i></a>
                                    @endif
                                </td>
                            </tr>
                            @php
                                $sr = $sr + 1;
                            @endphp
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>

</x-layout.admin.base>
