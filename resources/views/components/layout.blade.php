<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.css">
    <link rel="stylesheet" href="../CSS/style.css" />
    <link rel = "icon" href = "../CSS/sis-logo.png" type = "image/x-icon">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar -->
        <div class="bg-white toggle-sidebar" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <img src="../CSS/sis-logo.png" width="50" height="40" alt="logo" > SIS
            </div>
            <div class="list-group list-group-flush my-3">
                <a href="/dashboard/index" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ request()->is('dash') ? 'active' : '' }}">
                    <i class="fas fa-tachometer-alt me-2"></i>Dashboard
                </a>
                <a href="/students" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ request()->is('/') ? 'active' : '' }}">
                    <i class="fas fa-user-graduate me-2"></i>Students
                </a>
                <a href="/course" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ request()->is('course') ? 'active' : '' }}">
                    <i class="fas fa-thin fa-scroll me-2"></i>Courses
                </a>
                <a href="/users" class="list-group-item list-group-item-action bg-transparent second-text fw-bold {{ request()->is('users') ? 'active' : '' }}">
                    <i class="fas fa-users fa-scroll me-2"></i>Users
                </a>


            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0"></h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i>Admin
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{ route('logout') }}">@csrf logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>

            </nav>
    {{-- View output --}}
   {{$slot}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.11.2/main.js"></script>


    <script src="../Js/functions.js"></script>
    <x-flash-message/>
 </body>

 </html>
