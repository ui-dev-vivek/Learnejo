<x-layout.admin.base>

    <x-admin.maincard : title="Students">
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Sr.</th>
                            <th>SID</th>
                            <th>Pic</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Count</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $i = 1;
                        @endphp
                        @forelse ($getUsers as $user)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td><strong>{{ $user->student_id }}</strong></td>
                                <td><img class="rounded-circle" width="30" src="{{ $user->profile_pic }}"
                                        alt=""></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->login_count }}</td>
                            </tr>
                        @empty
                            <small>No Users Founde.</small>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </x-admin.maincard>
</x-layout.Admin.base>
