<!-- dashboard.index.blade.php -->
<x-layout>
    <div class="container-fluid px-4">
        <div class="row g-3 my-2">

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{ $totalCourses }}</h3>
                        <p class="fs-5">Courses</p>
                    </div>
                    <i class="fas fa-thin fa-scroll fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

            <div class="col-md-3">
                <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                    <div>
                        <h3 class="fs-2">{{ $totalStudents }}</h3>
                        <p class="fs-5">Students</p>
                    </div>
                    <i class="fas fa-user-graduate fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="chat-wrapper">
                <div id="calendar">
                    <!-- Calendar content goes here -->
                </div>
            </div>
        </div>

    </div>
</x-layout>
