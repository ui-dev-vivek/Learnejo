<x-layout.admin.base>
    <x-admin.maincard : title="Blogs">
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
                        @forelse ($getBlogs as $blog)
                            <tr class="tr{{ $blog->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6"><strong>{{ $blog->title }}</strong></td>
                                <td class="text-end">
                                    <a class="btn btn-sm btn-my-sm  btn-success"
                                        href="whatsapp://send?text=*Blog* %0a https://learnejo.com/Blogs/{{ $blog->prama_link }} %0a%0a ```Please Share To your Friends``` %0a ```We Provied | Free Courses | Jobs| Mock-Test | AI-Interview |```">
                                        <i class="fa fa-share-alt " aria-hidden="true"></i>
                                    </a>
                                    <a class="btn btn-sm btn-my-sm  btn-info"
                                        href="{{ url('/Blogs') }}/{{ $blog->prama_link }}" target="_blank">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <a class="btn btn-sm btn-my-sm  btn-warning"
                                        href="{{ url('/Admin/Edit-Blog') }}/{{ $blog->prama_link }}">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $blog->id }},'{{ csrf_token() }}','blog');">
                                        <i class="fa fa-trash did{{ $blog->id }}" aria-hidden="true"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <h2>No blogs Founde.</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>
</x-layout.admin.base>
