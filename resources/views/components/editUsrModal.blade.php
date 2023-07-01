<div class="modal fade" tabindex="-1" id="upUser">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content p-3">

        <div class="modal-body p-4">

                <form method="POST" action="/users/{{ $user->id }}" >
                @csrf
                    @method('PUT')
                <h3 class="text-center">Edit User</h3><hr>

                    <div class="col">
                        <label for="">First Name</label><br>
                        <input type="text" class="form-control mb-3" name="firstname" required value="{{ $user->firstname }}">
                    </div>
                    <div class="col">
                        <label for="">Last Name</label><br>
                        <input type="text" class="form-control mb-3" name="lastname" value="{{ $user->lastname}}">

                    </div>
                    <div class="col">
                        <label for="">Email</label><br>
                        <input type="text" class="form-control mb-3" name="email" value="{{ $user->email }}">

                    </div>
                    <div class="col">
                        <label for="">Password</label><br>
                        <input type="password" class="form-control mb-3" name="password" value="{{ $user->password }}">

                    </div>
                    <div class="col">
                        <label for="">User Type</label><br>
                        <select class="form-select" aria-label="Default select example" name="usertype" value="{{ $user->usertype }}">
                            <option selected>Select User</option>
                            <option value="1">Admin</option>
                            <option value="2">Staff</option>
                          </select>

                    </div>
                    <hr>

                <button type="button" class="btn btn-outline-secondary float-end mt-3 me-2" data-bs-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-info float-end mt-3 me-2">Update</button>
            </form>
        </div>

      </div>
    </div>
</div>
