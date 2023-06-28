@extends('layout')

@section('content')
    <div class="container-fluid">
<h3 class="fs-4 mb-3 col">
    {{ $heading }}
</h3>
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
                        {{-- <div class="dropdown">
                            <button class="btn border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                             Action
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                <li><a class="dropdown-item"  href="ViewCourses.html">View</a></li>
                                <li><a class="dropdown-item"  data-bs-toggle="modal" data-bs-target="#EditCourse">Edit</a></li>
                              <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#DelCourse">Delete</a></li>
                            </ul>
                          </div> --}}
                          <td>
                            <a class="btn btn-light" href="/course/{{ $viewCourse->id}}" role="button">View</a>
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
