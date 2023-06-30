<x-layout>
    <div class="container-fluid">
        @include('partials._search')
        @include('partials._addStBtn')
        @unless (count($students) == 0)
                <x-table>
                    <thead class="text-center">
                        <tr>
                            <th scope="col" width="50">#</th>
                            <th scope="col" >Date Created</th>
                            <th scope="col">Student Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Course</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>
                    <tbody id="tbl" class="text-center">
                        @foreach ($students as $st_details)
                            <x-student-card :st_details="$st_details"/>
                        @endforeach

                    </tbody>
                </x-table>

        @else
            <p class="text-center fw-bolder">No Student Found.</p>

        @endunless
    </div>
    <div class="mt-6 p-4">
        {{ $students->links() }}
    </div>
</x-layout>

