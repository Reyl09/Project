<x-layout>
<div class="container-fluid rounded-5 p-4">
    <div class="card p-3">
      <div class="card-body">
        <div class="card-title">

            <a class="btn btn-secondary float-end me-2" href="/" role="button"> < Back</a>
            <form action="/students/{{ $st_details->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger float-end me-2">Delete</button>
            </form>

            <a class="btn btn-info float-end me-2" href="/students/{{ $st_details->id}}/edit" role="button">Update</a>

            <h5>Student Details</h5>
    </div>
        <hr>
        {{-- <x-st_details-card :st_details="$st_details"/> --}}
        <form>
            <div class="row mb-3">
                <div class="col-4">
                    <label for="" class="fw-bold">Student Id</label><br>
                    {{ $st_details->student_id}}
                </div>
                <div class="col-4">
                    <label for="" class="fw-bold">Course</label><br>
                    {{-- {{ $course }} --}}
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



  </div>
</x-layout>
