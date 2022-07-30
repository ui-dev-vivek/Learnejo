<x-Layout.Admin.Base>

    <x-Admin.Maincard : title="Courses">
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
                        @forelse ($getCourses as $course)
                            <tr class="tr{{ $course->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6"><strong>{{ $course->prama_link }}</strong></td>
                                <td class="text-end">
                                    @if ($course->status == 1)
                                        <a class="btn btn-sm btn-my-sm  btn-info"
                                            href="{{ url('/Courses') }}/{{ $course->prama_link }}" target="_blank">
                                            <i class="fa fa-eye" aria-hidden="true"></i>{{ $course->view }}
                                        </a>
                                    @endif
                                    <a class="btn btn-sm view{{ $course->id }} d-none btn-my-sm  btn-info"
                                        href="{{ url('/Courses') }}/{{ $course->prama_link }}" target="_blank">
                                        <i class="fa fa-eye" aria-hidden="true"></i>{{ $course->view }}
                                    </a>


                                    <a class="btn btn-sm btn-my-sm  btn-success" href="javascript:void(0)"
                                        onclick="updateCourses('{{ $course->id }}','{{ $course->prama_link }}','{{ csrf_token() }}')">
                                        <i class="fa fa-share-alt sid{{ $course->id }}" aria-hidden="true"></i>
                                    </a>

                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $course->id }},'{{ csrf_token() }}','courses');">
                                        <i class="fa fa-trash did{{ $course->id }}" aria-hidden="true"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <h2>No Courses Founde.</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-Admin.Maincard>
</x-layout.Admin.base>
