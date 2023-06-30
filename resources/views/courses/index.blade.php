<x-layout>
    <div class="container-fluid">
        @include('partials._search')
        @include("partials._addCrsBtn")

        @unless (count($course) == 0)
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col" >Date Created</th>
                    <th scope="col">Course</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody id="tbl" class="text-center">
                @foreach ($course as $viewCourse)
                <a href="/students/{{ $viewCourse->id}}">
                    <tr>
                        <td>{{ $viewCourse->id}}</td>
                        <td>{{ $viewCourse->created_at}}</td>
                        <td>{{ $viewCourse->course}}</td>
                        <td>{{ $viewCourse->description}}</td>

                          <td>
                            @include('partials._actCrsBtn')
                        </td>
                    </tr>
                </a>
            @endforeach

            </tbody>
        </table>
    {{-- @endforeach --}}
@else
    <p>Not Found</p>
@endunless
    </div>
</x-layout>
