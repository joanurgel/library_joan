<div id="layoutSidenav">
    <div class="d-flex">
        <div id="layoutSidenav_nav">
            <nav class="blue-bg bg-primary sb-sidenav accordion sb-sidenav-dark white-text" id="sidenavAccordion">
                <div class="text-white blue-bg bg-primary sidebar-heading text-center py-4  fs-4 fw-bold text-uppercase border-bottom"><i
                    class=""></i>ADMIN</div>
                    
            <div class="list-group list-group-flush my-3 ">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        {{-- <div class="sb-sidenav-menu-heading">Core</div> --}}
                        <a class="nav-link text-white fw-bold mt-4 {{ Request::is('admin/dashboard') ? 'active':'' }}" href="{{ url('admin/dashboard') }}">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Dashboard
                        </a>
                      
                        {{-- <div class="sb-sidenav-menu-heading">Interface</div> --}}
                        <a class="nav-link {{ Request::is('admin/books') ? 'collapse active':'collapsed' }} text-white fw-bold" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-book-half "></i></div>
                           Books
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse {{ Request::is('admin/books') ? 'show':'' }}" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-white {{ Request::is('admin/books-borrowed') ? 'active':'' }}" href="{{ url('admin/books-borrowed') }}">Books Borrowed</a>
                                <a class="nav-link text-white {{ Request::is('admin/books') ? 'active':'' }}" href="{{ url('admin/books') }}">Books Return</a>
                            </nav>
                        </div>
                        {{-- <a class="nav-link collapsed text-white fw-bold" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                            <div class="sb-nav-link-icon"><i class="bi bi-book-half bi bi-person-fill"></i></div>
                          Account
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a> --}}
                        <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                <a class="nav-link collapsed text-white" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                    Admin
                                    {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                                </a>
                                {{-- <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="login.html">Login</a>
                                        <a class="nav-link" href="register.html">Register</a>
                                        <a class="nav-link" href="password.html">Forgot Password</a>
                                    </nav>
                                </div> --}}
                                <a class="nav-link collapsed text-white " href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                    Students
                                    {{-- <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div> --}}
                                </a>
                                {{-- <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                    <nav class="sb-sidenav-menu-nested nav">
                                        <a class="nav-link" href="401.html">401 Page</a>
                                        <a class="nav-link" href="404.html">404 Page</a>
                                        <a class="nav-link" href="500.html">500 Page</a>
                                    </nav>
                                </div> --}}
                            </nav>
                        </div>
                        {{-- <div class="sb-sidenav-menu-heading">Addons</div> --}}

                        <a class="nav-link {{ Request::is('admin/record') ? 'collapse active':'collapsed' }} text-white fw-bold" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePost" aria-expanded="false" aria-controls="collapseLayouts">
                            <div class="sb-nav-link-icon"><i class="bi bi-book-half "></i></div>
                          Record
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapsePost" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-white" href="{{ url('admin/add-record') }}">Add Record</a>
                                <a class="nav-link text-white" href="{{ url('admin/record') }}">View Record</a>
                            </nav>
                        </div>



                        
                        <a class="nav-link text-white fw-bold" href="{{ url('admin/setting') }}">
                            <div class="sb-nav-link-icon"><i class="bi bi-gear-fill"></i></div>
                            Setting
                        </a>
                    </div>
                </div>
                
            </nav>
        </div> 


{{-- <div class="d-flex">  --}}
    <!-- Sidebar -->
    {{-- <div class="blue-bg bg-primary" id="sidebar-wrapper">
        <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom"><i
                class=""></i>ADMIN</div>
        <div class="list-group list-group-flush my-3">
            
            <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
             <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-house-door-fill"> </i>Home</a>
             <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-person-fill"> </i>Accounts</a>
            
                <a href="" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-book-half"> </i>Books
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a> 
                <div class="collapse" id="collapseBooks" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="layout-static.html">Borrowed Books</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Return Books</a>
                    </nav>
                </div>

            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-file-earmark-fill"> </i>Records</a>
            
            <a href="#" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="bi bi-gear-fill"> </i>Settings</a>
            
        </div>
    </div> --}}