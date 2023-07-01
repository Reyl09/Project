@props(['st_details'])
<form>
    <div class="row mb-3">
        <div class="col-4">
            <label for="" class="fw-bold">Student Id</label><br>
            {{ $st_details->student_id}}
        </div>
        <div class="col-4">
            <label for="" class="fw-bold">Course</label><br>
            {{ $course }}
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