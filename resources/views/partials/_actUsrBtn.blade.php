
<div class="dropdown">
    <button class="btn border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Action
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li>
            <form action="/users/{{ $user->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="dropdown-item btn btn-danger">Delete</button>
            </form>
        </li>
        <li>
            <button type="button" class="dropdown-item btn btn-success" data-bs-toggle="modal" data-bs-target="#upUser">Edit</button>
        </li>
    </ul>
</div>

@include('components.editUsrModal')
