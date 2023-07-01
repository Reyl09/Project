<!-- Add Course -->
<div class="modal fade" tabindex="-1" id="AddCourse">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">

        <div class="modal-body p-4">

                <form method="POST" action="/course" >
                @csrf
                <h3 class="text-center">Add New Course</h3><hr>

                    <div class="col">
                        <label for="">Course</label><br>
                        <input type="text" class="form-control mb-3"name="course" required  value="{{ old('course') }}" >
                    </div>
                    <div class="col">
                        <label for="">Description</label><br>
                        <input class="form-control"  required name="description" value="{{ old('description') }}">
                    </div>

                <button type="submit" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info float-end mt-3 me-2">Add</button>
            </form>
        </div>

      </div>
    </div>
</div>