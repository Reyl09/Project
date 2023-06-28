@extends('layout')

@section('content')
<div class="container-fluid rounded-5 p-4">
    <div class="card p-3">
      <div class="card-body">
        <div class="card-title">

            <a class="btn btn-secondary float-end me-2" href="Student.html" role="button"> < Back</a>

            <button type="button" class="btn btn-danger float-end me-2" data-bs-toggle="modal" data-bs-target="#DelStud">Delete</button>
            <button type="button" class="btn btn-success float-end me-2" data-bs-toggle="modal" data-bs-target="#UpStat">Update Status</button>
            <a class="btn btn-info float-end me-2" href="Update.html" role="button">Edit</a>

            <button type="button" class="btn btn-warning float-end me-2" data-bs-toggle="modal" data-bs-target="#academic">+ Academic</button>
            <h5>Student Details</h5>
    </div>
        <hr>
        <form>
            <div class="row mb-3">
                <div class="col-4">
                    <label for="" class="fw-bold">Student Id</label><br>
                    {{ $st_details->student_id}}
                </div>
                <div class="col-4">
                    <label for="" class="fw-bold">Status</label><br>
                    {Status}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-8">
                    <label for="" class="fw-bold">Name</label><br>
                    {{ $st_details->lastname}},
                    {{ $st_details->firstname }}
                    {{ $st_details->middlename}}
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-4">
                    <label for="" class="fw-bold">Gender</label><br>
                    {{ $st_details->gender }}

                </div>
                <div class="col-4">
                    <label for="" class="fw-bold">Birthdate</label><br>
                    {{ $st_details->birthday}}

                </div>
                <div class="col-4">
                    <label for="" class="fw-bold">Email</label><br>
                    {{ $st_details->email}}

                </div>

            </div>
            <label for="" class="fw-bold">Address</label><br>
            {{ $st_details->address}}

        </form>
    </div><hr>
    <h5>Academic History</h5>

      <table class="table  rounded shadow-sm  table-hover ">
          <thead class="text-center bg-success text-light">
              <tr>
                  <th scope="col" width="50">#</th>
                  <th scope="col" >Course</th>
                  <th scope="col">Semester/S.Y.</th>
                  <th scope="col">Year</th>
                  <th scope="col">Beg. of Sem Status</th>
                  <th scope="col">End of Sem Status</th>
                  <th scope="col">Action</th>

              </tr>
          </thead>
          <tbody id="tbl" class="text-center">
                <tr>
                  <td>{{ $academic->id }}</td>
                  <td>{{ $st_details->course  }}</td>
                  <td class="px-2 py-1 align-middle">
                      <small><span class="">{{ $academic->semester }}</span></small><br>
                      <small><span class="">{{  $academic->sy }}</span></small>
                  </td>
                  <td>{{$academic->year }}</td>
                  <td>{{$academic->BegStat }}</td>
                  <td>{{$academic->EndStat }}</td>

                  <td>
                      <div class="dropdown">
                          <button class="btn border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                           Action
                          </button>
                          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                            <li><a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#EditAcads">Edit</a></li>
                            <li><a class="dropdown-item" href="#">Delete</a></li>
                          </ul>
                        </div>
                  </td>

              </tr>
          </tbody>
      </table>
  </div>
@endsection
