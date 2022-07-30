<x-Layout.Admin.Base>

    <x-Admin.Maincard : title="Corporet Jobs">
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
                        @forelse ($getCorpJobs as $job)
                            <tr class="tr{{ $job->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6"><strong>{{ $job->title }}</strong></td>
                                <td class="text-end">
                                    @php
                                        $massage="https://learnejo.com/Job-Internships/" . $job->prama_link;
                                        if ($job->status == 0) {
                                            $show="d-none";
                                        } else {
                                            $show="";
                                        }
                                    @endphp

                                    <a class="btn btn-sm view{{ $job->id }} {{ $show }} btn-my-sm  btn-info"
                                        href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}" target="_blank">
                                        <i class="fa fa-eye" aria-hidden="true"></i> {{ $job->view }}
                                    </a>

                                    @if ($job->status == 0)
                                        <a class="btn btn-sm btn-my-sm  btn-success" href="javascript:void(0)"
                                            onclick="updateJobs('{{ $job->id }}','{{ $job->prama_link }}','{{ $job->sub_type }}','{{ $job->type }}','{{ csrf_token() }}')">
                                            <i class="fa fa-share-alt sid{{ $job->id }}" aria-hidden="true"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-sm btn-my-sm  btn-success" href="javascript:void(0)"
                                            onclick="whatsappShare('{{ $massage }}')">
                                            <i class="fa fa-share-alt sid{{ $job->id }}" aria-hidden="true"></i>
                                        </a>
                                    @endif


                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $job->id }},'{{ csrf_token() }}','jobs');">
                                        <i class="fa fa-trash did{{ $job->id }}" aria-hidden="true"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <h2>No jobs Founde.</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-Admin.Maincard>

    <x-admin.maincard : title="Government Jobs">
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
                        @forelse ($getGovtJobs as $job)
                            <tr class="tr{{ $job->id }}">
                                <td scope="row">{{ $i++ }}</td>
                                <td class="h6"><strong>{{ $job->title }}</strong></td>
                                <td class="text-end">
                                    @php
                                        $massage="https://learnejo.com/Job-Internships/" . $job->prama_link;
                                        if ($job->status == 0) {
                                            $show="d-none";
                                        } else {
                                            $show="";
                                        }
                                    @endphp

                                    <a class="btn btn-sm view{{ $job->id }} {{ $show }} btn-my-sm  btn-info"
                                        href="{{ url('/Job-Internships') }}/{{ $job->prama_link }}" target="_blank">
                                        <i class="fa fa-eye" aria-hidden="true"></i> {{ $job->view }}
                                    </a>

                                    @if ($job->status == 0)
                                        <a class="btn btn-sm btn-my-sm  btn-success" href="javascript:void(0)"
                                            onclick="updateJobs('{{ $job->id }}','{{ $job->prama_link }}','{{ $job->sub_type }}','{{ $job->type }}','{{ csrf_token() }}')">
                                            <i class="fa fa-share-alt sid{{ $job->id }}" aria-hidden="true"></i>
                                        </a>
                                    @else
                                        <a class="btn btn-sm btn-my-sm  btn-success" href="javascript:void(0)"
                                            onclick="whatsappShare('{{ $massage }}')">
                                            <i class="fa fa-share-alt sid{{ $job->id }}" aria-hidden="true"></i>
                                        </a>
                                    @endif


                                    <a class="btn btn-sm btn-my-sm  btn-danger" href="javascript:void(0)"
                                        ondblclick="deleteItem({{ $job->id }},'{{ csrf_token() }}','jobs');">
                                        <i class="fa fa-trash did{{ $job->id }}" aria-hidden="true"></i>
                                    </a>

                                </td>
                            </tr>
                        @empty
                            <h2>No jobs Founde.</h2>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>
</x-Layout.Admin.Base>
