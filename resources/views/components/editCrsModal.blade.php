<!-- Edit Course -->
<div class="modal fade" tabindex="-1" id="editCrs">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">

        <div class="modal-body p-4">

            <form method="POST" action="/course/{{ $viewCourse->id }}" >
                @csrf
                @method('PUT')
                <h3 class="text-center">Edit Course</h3><hr>

                    <div class="col">
                        <label for="">Course</label><br>
                        <input type="text" class="form-control mb-3"name="course" required  value="{{ $viewCourse->course }}" >
                    </div>
                    <div class="col">
                        <label for="">Description</label><br>
                        <input class="form-control"  required name="description" value="{{ $viewCourse->description }}">
                    </div>

                <button type="submit" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info float-end mt-3 me-2">Add</button>
            </form>
        </div>

      </div>
    </div>
</div>