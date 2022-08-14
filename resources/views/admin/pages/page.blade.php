<x-layout.admin.base>
    <x-admin.maincard : title="Pages">
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
                        @forelse ($getPages as $page)
                            <tr class="tr{{ $page->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6"><strong>{{ $page->title }}</strong></td>
                                <td class="text-end">
                                    <a class="btn btn-sm btn-my-sm  btn-info"
                                        href="{{ url('/Pages') }}/{{ $page->prama_link }}" target="_blank">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-my-sm  btn-warning"
                                        href="{{ url('/Admin/Edit-Pages') }}/{{ $page->prama_link }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $page->id }},'{{ csrf_token() }}','pages');">
                                        <i class="fa fa-trash did{{ $page->id }}" aria-hidden="true"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <h2>No pages Founde.</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>
</x-layout.admin.base>
