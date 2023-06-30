<x-layout>
    <div class="container-fluid my-5 rounded-5 p-4">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">New Student</h5><hr>
            <form method="POST" action="/students">
                @csrf
                <div class="row">
                    <div class="col-4">
                        <label for="">Student Id</label>
                        <input type="text" class="form-control " name="student_id" value="{{ old('student_id') }}">
                        @error('student_id')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="">Course</label>
                        <input type="text" class="form-control" name="course" value="{{ old('course') }}">
                        @error('course')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mt-3">
                        <label for="">First Name</label>
                        <input type="text" class="form-control " name="firstname" value="{{ old('firstname') }}">
                        @error('firstname')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="">Middle Name</label>
                        <input type="text" class="form-control mb-3" placeholder="(optional)" name="middlename" value="{{ old('middlename') }}">
                        @error('middlename')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="">Last Name</label>
                        <input type="text" class="form-control mb-3" name="lastname" value="{{ old('lastname') }}">
                        @error('lastname')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <div class="row">
                    <div class="col-4">
                        <label for="">Gender</label>
                        <input type="text" class="form-control mb-3" name="gender" value="{{ old('gender') }}">
                        @error('gender')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="">Birthday</label>
                        <input type="date" class="form-control mb-3" name="birthday" value="{{ old('birthday') }}">
                        @error('birthday')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="col-4">
                        <label for="">Email</label>
                        <input type="text" class="form-control mb-3" name="email" value="{{ old('email') }}">
                        @error('email')
                            <p class="text-danger text-xxs">{{ $message }}</p>
                        @enderror
                    </div>

                </div>
                <label for="" class="form-label">Address</label>
                <input class="form-control"  name="address" value="{{ old('address') }}">
                @error('address')
                    <p class="text-danger text-xxs">{{ $message }}</p>
                @enderror

          </div>
          <hr>
          <div class="container justify-content-sm-start my-2 mb-2">
            <!-- <button type="button" class="btn btn-secondary float-end border" href="Student.html">Cancel</button> -->
            <a class="btn btn-secondary float-end me-2" href="/" role="button">Cancel</a>
            <button type="submit" class="btn btn-primary float-end me-2">Save Details</button>

        </div>
    </form>
    </div>
</x-layout>
