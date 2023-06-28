@extends('layout')

@section('content')
    <div class="container-fluid">
<h3 class="fs-4 mb-3 col">
    {{ $heading }}
</h3>
@unless (count($students) == 0)
        <table class="table bg-white rounded shadow-sm  table-hover">
            <thead class="text-center">
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col" >Date Created</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody id="tbl" class="text-center">
                @foreach ($students as $st_details)
                <a href="/students/{{ $st_details->id}}">
                    <tr>
                        <td>{{ $st_details->id}}</td>
                        <td>{{ $st_details->created_at}}</td>
                        <td>{{ $st_details->student_id}}</td>
                        <td>
                            {{ $st_details->lastname}},
                            {{ $st_details->firstname}}
                            {{ $st_details->middlename}}
                        </td>
                        <td>{{ $st_details->course}}</td>
                        <td>{{ $st_details->status}}</td>
                        <td>
                            <a class="btn btn-light" href="/students/{{ $st_details->id}}" role="button">View</a>
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
@endsection
