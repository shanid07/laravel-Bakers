<body>

    <div class="container-fluid adminfont">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0" style="background-color: rgb(40, 40, 180)">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                    <a href="/" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                        <span class="fs-5 d-none d-sm-inline">Menu</span>
                    </a>
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href={{route('dashboard')}} class="nav-link align-middle px-0 text-white">
                                <i class="fs-4 bi-house"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Add Products</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href={{route('catcake')}} class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Cake</span>  </a>
                                </li>
                                <li>
                                    <a href={{route('catpastry')}} class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Pastry</span>  </a>
                                </li>
                            </ul>
                        </li>

                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                                <i class="fs-4 bi-speedometer2"></i> <span class="ms-1 d-none d-sm-inline text-white">Add Products</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="{{route('product1')}}" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Cake</a>
                                </li>
                                <li>
                                    <a href="{{route('product2')}}" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Pastry</a>
                                </li>
                                <li>
                                    {{-- <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Product</span> 3</a> --}}
                                </li>
                                <li>
                                    {{-- <a href="#" class="nav-link px-0 text-white"> <span class="d-none d-sm-inline">Product</span> 4</a> --}}
                                </li>
                            </ul>

                        <li>
                            <a href="{{route('showorder')}}" class="nav-link px-0 align-middle text-white">
                                <i class="fs-4 bi-table"></i> <span class="ms-1 d-none d-sm-inline">Orders</span></a>
                        </li>
                        <li>
                            <a href={{route('msg')}} class="nav-link px-0 align-middle text-white">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Messages</span> </a>
                        </li>
                        </li>

                        </li>
                        <li>
                            <a href="{{route('customers')}}" class="nav-link px-0 align-middle text-white">
                                <i class="fs-4 bi-people"></i> <span class="ms-1 d-none d-sm-inline">Customers</span> </a>
                        </li>
                    </ul>
                    <hr>
                    <div class="dropdown pb-4">
                        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="/image/adminpro.webp" alt="hugenerd" width="30" height="30" class="rounded-circle">
                            <span class="d-none d-sm-inline mx-1">Admin</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark text-small shadow">
                            <li><a class="dropdown-item" href="#">New project...</a></li>
                            <li><a class="dropdown-item" href="#">Settings</a></li>
                            <li><a class="dropdown-item" href="#">Profile</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="{{route('logout')}}">Sign out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col py-3">



</body>
