<x-layout>
    <div class="container-fluid">
        @include('partials._search')
        @include('partials._addUsrBtn')
        @unless (count($users) == 0)
                <x-table>
                    <thead class="text-center">
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col" >Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">User Type</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody id="tbl">
                        @foreach ($users as $user)
                        <tr>
                            <td class="text-center">{{ $user->id }}</td>
                            <td class="text-center">{{ $user->lastname }},
                                {{ $user->firstname }}
                            </td>
                            <td class="text-center">{{ $user->email }}</td>
                            <td class="text-center">{{ $user->usertype }}</td>
                            <td>
                                @include('partials._actUsrBtn')

                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </x-table>

        @else
            <p class="text-center fw-bolder">No Users Found.</p>

        @endunless
    </div>
    {{-- <div class="mt-6 p-4">
        {{ $students->links() }}
    </div> --}}
</x-layout>

