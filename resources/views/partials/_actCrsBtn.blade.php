<div class="dropdown">
    <button class="btn border dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
     Action
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="/course/{{ $viewCourse->id }}">View</a></li>
        <li><a class="dropdown-item" role="button" type="submit" data-bs-toggle="modal" data-bs-target="#editCrs">Edit</a></li>
        @include('components.editCrsModal')
        <li>
            <form action="/course/{{ $viewCourse->id }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="dropdown-item" role="button">Delete</button>
            </form>
        </li>
    </ul>
</div>
