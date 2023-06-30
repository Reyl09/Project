@props(['st_details'])
<a href="/students/{{ $st_details->id}}">
    <tr>
        <td>{{ $st_details->id}}</td>
        <td>{{ $st_details->created_at}}</td>
        <td>{{ $st_details->student_id}}</td>
        <td>
            {{ $st_details->lastname}},
            {{ $st_details->firstname}}
            {{ $st_details->middlename}}
        </td>
        <td>{{ $st_details->course}}</td>

        <td>
            <a class="btn btn-light" href="/students/{{ $st_details->id}}" role="button">View</a>
        </td>
    </tr>
</a>
