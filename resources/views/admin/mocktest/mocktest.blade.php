<x-layout.admin.base>
    <x-admin.maincard : title="Mock Test">
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Title</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($getTechMockTest as $mockTest)
                            <tr class="tr{{ $mockTest->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6"><strong>{{ $mockTest->name }}</strong></td>
                                <td class="text-end">

                                    <a class="btn btn-sm btn-my-sm  btn-info"
                                        href="{{ url('/Admin/About-Mock-Test') }}/{{ $mockTest->prama_link }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $mockTest->id }},'{{ csrf_token() }}','mock_test_topic');">
                                        <i class="fa fa-trash did{{ $mockTest->id }}" aria-hidden="true"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <h2>No mockTests Founde.</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>
    <x-admin.maincard : title="Mock Test">
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>Title</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($getNonTechMockTest as $mockTest)
                            <tr class="tr{{ $mockTest->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6"><strong>{{ $mockTest->name }}</strong></td>
                                <td class="text-end">

                                    <a class="btn btn-sm btn-my-sm  btn-info"
                                        href="{{ url('/Admin/About-Mock-Test') }}/{{ $mockTest->prama_link }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $mockTest->id }},'{{ csrf_token() }}','mock_test_topic');">
                                        <i class="fa fa-trash did{{ $mockTest->id }}" aria-hidden="true"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <h2>No mockTests Founde.</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>
</x-layout.admin.base>
