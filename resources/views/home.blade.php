@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> {{ __ ('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success"role="alert">
                        {{ session('status') }}
                    </div>
                        
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>



  {{-- <div class="d-flex" id="wrapper"> --}}
    <!-- Sidebar -->
    {{-- <div class="blue-bg bg-primary" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class=""></i>ADMIN</div>
        <div class="list-group list-group-flush my-3">
            
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
             <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-house-door-fill"> </i>Home</a>
             <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-person-fill"> </i>Accounts</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-book-half"> </i>Books</a>
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-file-earmark-fill"> </i>Records</a>
            
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-gear-fill"> </i>Settings</a>
            
        </div>
    </div> --}}
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
     {{-- <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="primary-text fs-4 me-3 " id="menu-toggle"></i>
                <h2 class="fs-2 m-0 fw-bold">Library System</h2>
            </div>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button> --}}

            {{-- <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-user me-2"></i>Admin
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div> --}}

        {{-- </nav>
        </div>
    </div>
</div> --}}


<!-- /#page-content-wrapper -->
{{-- </div> 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
<link rel="stylesheet" href="/style.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css"> --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script> 
{{-- <script>
    var el = document.getElementById("wrapper");
    var toggleButton = document.getElementById("menu-toggle");

    toggleButton.onclick = function () {
        el.classList.toggle("toggled");
    };
</script> --}}

@endsection 
