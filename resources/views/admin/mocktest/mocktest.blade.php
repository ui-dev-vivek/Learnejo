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
                    <tbody id="accordion">

                        @php
                            $i = 1;
                        @endphp
                        @forelse ($getNonTechMockTest as $mockTest)
                            <tr class="tr{{ $mockTest->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6">
                                    <div class="" id="heading{{ $i }}">
                                        <h5 class="mb-0">
                                            <button class="btn btn-link" data-toggle="collapse"
                                                data-target="#collapse{{ $i }}" aria-expanded="false"
                                                aria-controls="collapse{{ $i }}">
                                                {{ $mockTest->name }}
                                            </button>
                                        </h5>
                                    </div>

                                    <div id="collapse{{ $i }}" class="collapse "
                                        aria-labelledby="heading{{ $i }}" data-parent="#accordion">
                                        <hr>
                                        @foreach ($mockTest->mockTestSubTopic as $topic)
                                            <div class="tr{{ $topic->id }}">
                                                <strong>{{ $topic->name }}</strong><a class="text-danger"
                                                    href="javascript:void(0)"
                                                    ondblclick="deleteItem({{ $topic->id }},'{{ csrf_token() }}','mock_test_sub_topic');">
                                                    <i class="fa fa-trash did{{ $topic->id }}"
                                                        aria-hidden="true"></i>
                                                </a>

                                                <div class="card-block table-border-style">
                                                    <div class="table-responsive">
                                                        <table class="table">
                                                            @forelse ($topic->mockTestHeading as $headng)
                                                                <tr class="tr{{ $headng->id }}">
                                                                    <td> {{ $headng->name }}</td>
                                                                    <td><a class="text-danger" href="javascript:void(0)"
                                                                            ondblclick="deleteItem({{ $headng->id }},'{{ csrf_token() }}','mock_test_heading');">
                                                                            <i class="fa fa-trash did{{ $headng->id }}"
                                                                                aria-hidden="true"></i>
                                                                        </a></td>
                                                                </tr>
                                                            @empty
                                                            @endforelse
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>

                                </td>
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
