<x-layout>
<div class="container-fluid row my-5">
    <div class="input-group rounded row">
        <h3 class="fs-4 mb-3 col">Students who are enrolled in: {{ $course->course }} </h3>
        <div class="col-12 col-lg-3">
            <div class="col mt-2 mb-3">
                <input type="search" v-model="search" @input="searchStud(search)" class="form-control border" placeholder="Search">
            </div>
        </div>
    </div>

    <div class="container">
        <x-table>
            <thead class="text-center">
                <tr>
                    <th scope="col" width="50">#</th>
                    <th scope="col" >Date Created</th>
                    <th scope="col">Student Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>

                </tr>
            </thead>
            <tbody id="tbl" class="text-center">
                <tr>
                    <td>{{ $st_details->id }}</td>
                    <td>{{ $st_details->created_at}}</td>
                    <td>{{$st_details->student_id}}</td>
                    <td>
                        {{ $st_details->lastname}},
                        {{ $st_details->firstname}}
                        {{ $st_details->middlename}}
                    </td>
                    <td>{{ $st_details->course}}</td>
                    <td>{{ $st_details->status}}</td>

                    <td>
                        <a class="btn btn-light " href="./Student/StDetails.html" role="button">View</a>

                    </td>

                </tr>
            </tbody>
        </x-table>
    </div>
</div>
</x-layout>
