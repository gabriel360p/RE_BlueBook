<!DOCTYPE html>
<html lang="pt-br">
<!-- [Head] start -->

<head>
    <title> BlueBook </title>
    <!-- [Meta] -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <meta name="description" content="BlueBook é um site desenvolvido para facilitar anotações." />

    <meta name="keywords" content="BlueBook, Anotações, Facilidade" />
    <meta name="author" content="lorium17" />

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/images/favicon.svg') }}" type="image/x-icon" />
    <!-- [Google Font] Family -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap')}}"
        id="main-font-link" />
    <!-- [Tabler Icons] https://tablericons.com -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/tabler-icons.min.css') }}" />
    <!-- [Material Icons] https://fonts.google.com/icons -->
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}" />
    <!-- [Template CSS Files] -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" id="main-style-link" />
    <link rel="stylesheet" href="{{ asset('assets/css/style-preset.css') }}" id="preset-style-link" />

</head>

<body>
    <!-- [ Pre-loader ] start -->
    <div class="loader-bg">
        <div class="loader-track">
            <div class="loader-fill"></div>
        </div>
    </div>
    <!-- [ Pre-loader ] End -->

    <!-- [ Header Topbar ] start -->
    <header class="pc-header">
        <div class="m-header">
            <a href="{{route('dashboard')}}" class="b-brand">
                <!-- ========   change your logo hear   ============ -->
                <img src="../assets/images/logo-dark.svg" alt="" class="logo logo-lg" />
            </a>
            <!-- ======= Menu collapse Icon ===== -->
            <div class="pc-h-item">
                <a href="" class="pc-head-link head-link-secondary m-0" id="sidebar-hide">
                    <i class="ti ti-menu-2"></i>
                </a>
            </div>
        </div>
        <div class="header-wrapper"> <!-- [Mobile Media Block] start -->
            <div class="me-auto pc-mob-drp">
                <ul class="list-unstyled">
                    <li class="pc-h-item header-mobile-collapse">
                        <a href="#" class="pc-head-link head-link-secondary ms-0" id="mobile-collapse">
                            <i class="ti ti-menu-2"></i>
                        </a>
                    </li>
                    <li class="dropdown pc-h-item d-inline-flex d-md-none">
                        <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none m-0"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-search"></i>
                        </a>
                        <div class="dropdown-menu pc-h-dropdown drp-search">
                            <form class="px-3">
                                <div class="form-group mb-0 d-flex align-items-center">
                                    <i class="ti ti-search"></i>
                                    <input type="search" class="form-control border-0 shadow-none"
                                        placeholder="Search here..." />
                                </div>
                            </form>
                        </div>
                    </li>
                    <li class="pc-h-item d-none d-md-inline-flex">
                        <form class="header-search">
                            <i class="ti ti-search icon-search"></i>
                            <input type="search" class="form-control" placeholder="Search here..." />
                            <button class="btn btn-light-secondary btn-search"><i
                                    class="ti ti-adjustments-horizontal"></i></button>
                        </form>
                    </li>
                </ul>
            </div>

            <!-- [Mobile Media Block end] -->
            <div class="ms-auto">
                <ul class="list-unstyled">
                    {{-- <li class="dropdown pc-h-item">
                        <a class="pc-head-link head-link-secondary dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <i class="ti ti-bell"></i>
                        </a>
                        <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <a href="#!" class="link-primary float-end text-decoration-underline">Mark as all
                                    read</a>
                                <h5>All Notification <span class="badge bg-warning rounded-pill ms-1">01</span></h5>
                            </div>
                            <div class="dropdown-header px-0 text-wrap header-notification-scroll position-relative"
                                style="max-height: calc(100vh - 215px)">
                                <div class="list-group list-group-flush w-100">
                                    <div class="list-group-item">
                                        <select class="form-select">
                                            <option value="all">All Notification</option>
                                            <option value="new">New</option>
                                            <option value="unread">Unread</option>
                                            <option value="other">Other</option>
                                        </select>
                                    </div>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="../assets/images/user/avatar-2.jpg" alt="user-image"
                                                    class="user-avtar" />
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">2 min ago</span>
                                                <h5>John Doe</h5>
                                                <p class="text-body fs-6">It is a long established fact that a reader
                                                    will be distracted </p>
                                                <div class="badge rounded-pill bg-light-danger">Unread</div>
                                                <div class="badge rounded-pill bg-light-warning">New</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-success"><i
                                                        class="ti ti-building-store"></i></div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">3 min ago</span>
                                                <h5>Store Verification Done</h5>
                                                <p class="text-body fs-6">We have successfully received your request.
                                                </p>
                                                <div class="badge rounded-pill bg-light-danger">Unread</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <div class="user-avtar bg-light-primary"><i class="ti ti-mailbox"></i>
                                                </div>
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">5 min ago</span>
                                                <h5>Check Your Mail.</h5>
                                                <p class="text-body fs-6">All done! Now check your inbox as you're in
                                                    for a sweet treat! </p>
                                                <button class="btn btn-sm btn-primary">Mail <i
                                                        class="ti ti-brand-telegram"></i></button>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="../assets/images/user/avatar-1.jpg" alt="user-image"
                                                    class="user-avtar" />
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">8 min ago</span>
                                                <h5>John Doe</h5>
                                                <p class="text-body fs-6">Uploaded two file on &nbsp;<strong>21 Jan
                                                        2020</strong></p>
                                                <div class="notification-file d-flex p-3 bg-light-secondary rounded">
                                                    <i class="ti ti-arrow-bar-to-down"></i>
                                                    <h5 class="m-0">demo.jpg</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item list-group-item-action">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0">
                                                <img src="../assets/images/user/avatar-3.jpg" alt="user-image"
                                                    class="user-avtar" />
                                            </div>
                                            <div class="flex-grow-1 ms-1">
                                                <span class="float-end text-muted">10 min ago</span>
                                                <h5>Joseph William</h5>
                                                <p class="text-body fs-6">It is a long established fact that a reader
                                                    will be distracted </p>
                                                <div class="badge rounded-pill bg-light-success">Confirmation of
                                                    Account</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="dropdown-divider"></div>
                            <div class="text-center py-2">
                                <a href="#!" class="link-primary">Mark as all read</a>
                            </div>
                        </div>
                    </li> --}}
                    <li class="dropdown pc-h-item header-user-profile">
                        <a class="pc-head-link head-link-primary dropdown-toggle arrow-none me-0"
                            data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false"
                            aria-expanded="false">
                            <img src="../assets/images/user/avatar-2.jpg" alt="user-image" class="user-avtar" />
                            <span>
                                <i class="ti ti-settings"></i>
                            </span>
                        </a>
                        <div class="dropdown-menu dropdown-user-profile dropdown-menu-end pc-h-dropdown">
                            <div class="dropdown-header">
                                <h4>Olá, <span class="small text-muted"> {{ Auth::user()->name }} </span></h4>
                                <p class="text-muted">Configurações sua conta</p>
                                {{-- <form class="header-search">
                                    <i class="ti ti-search icon-search"></i>
                                    <input type="search" class="form-control"
                                        placeholder="Search profile options" />
                                </form> --}}
                                {{-- <hr /> --}}
                                <div class="profile-notification-scroll position-relative"
                                    style="max-height: calc(100vh - 280px)">
                                    {{-- <div class="upgradeplan-block bg-light-warning rounded">
                                        <h4>Explore full code</h4>
                                        <p class="text-muted">Buy now to get full access of code files</p>
                                        <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/"
                                            target="_blank" class="btn btn-warning">Buy Now</a>
                                    </div>
                                    <hr />
                                    <div class="settings-block bg-light-primary rounded">
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckDefault" />
                                            <label class="form-check-label" for="flexSwitchCheckDefault">Start DND
                                                Mode</label>
                                        </div>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                id="flexSwitchCheckChecked" checked />
                                            <label class="form-check-label" for="flexSwitchCheckChecked">Allow
                                                Notifications</label>
                                        </div>
                                    </div> --}}
                                    {{-- <hr /> --}}
                                    {{-- <a href="#" class="dropdown-item">
                                        <i class="ti ti-settings"></i>
                                        <span>Account Settings</span>
                                    </a> --}}

                                    <a href="#" class="dropdown-item">
                                        <button class="btn" style="width:100%; border:none; text-align:start;">
                                            <i class="ti ti-user"></i>
                                            <span>Perfil</span>
                                        </button>
                                    </a>

                                    <form method="post" action="{{ route('logout') }}" class="dropdown-item">
                                        @csrf
                                        <button class="btn" style="width:100%; border:none; text-align:start;">
                                            <i class="ti ti-logout"></i>
                                            Sair
                                        </button>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <!-- [ Header ] end -->

    <!-- [ Sidebar Menu ] start -->
    <nav class="pc-sidebar">
        <div class="navbar-wrapper">
            <div class="m-header">
                <a href="index.html" class="b-brand">
                    <!-- ========   Change your logo from here   ============ -->
                    <img src="../assets/images/logo-dark.svg" alt="" class="logo logo-lg" />
                </a>
            </div>
            <div class="navbar-content">
                <ul class="pc-navbar">
                    <li class="pc-item pc-caption">
                        <label>Início</label>
                        <i class="ti ti-dashboard"></i>
                    </li>
                    <li class="pc-item">
                        <a href="{{ route('dashboard') }}" class="pc-link"><span class="pc-micon"><i
                                    class="ti ti-dashboard"></i></span><span class="pc-mtext">Dashboard</span></a>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Cadernos</label>
                        <i class="ti t  i-news"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon"><i
                                    class="ti ti-book"></i></span><span class="pc-mtext">Cadernos</span><span
                                class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>

                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="../pages/login-v3.html">Novo Caderno</a>
                            </li>
                            <li class="pc-item"><a class="pc-link" href="../pages/register-v3.html">Cadernos</a></li>
                        </ul>
                    </li>


                    <li class="pc-item pc-caption">
                        <label>Categorias</label>
                        <i class="ti ti-news"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon"><i
                                    class="ti ti-filter"></i></span><span class="pc-mtext">Categorias</span><span
                                class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>

                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{ route('categories.create') }}">Nova
                                    Categoria</a></li>
                            <li class="pc-item"><a class="pc-link"
                                    href="{{ route('categories.index') }}">Categorias</a></li>
                        </ul>
                    </li>

                    <li class="pc-item pc-caption">
                        <label>Tarefas</label>
                        <i class="ti t  i-news"></i>
                    </li>
                    <li class="pc-item pc-hasmenu">
                        <a href="#!" class="pc-link"><span class="pc-micon"><i
                                    class="ti ti-menu"></i></span><span class="pc-mtext">Tarefas</span><span
                                class="pc-arrow"><i class="ti ti-chevron-right"></i></span></a>

                        <ul class="pc-submenu">
                            <li class="pc-item"><a class="pc-link" href="{{route('tasks.create')}}">Nova Tarefa</a></li>
                            <li class="pc-item"><a class="pc-link" href="{{route('tasks.index')}}">Tarefas</a></li>
                        </ul>
                    </li>


                </ul>

                {{-- <div class="pc-navbar-card bg-primary rounded">
                    <h4 class="text-white">Berry Pro</h4>
                    <p class="text-white opacity-75">Checkout Berry pro features</p>
                    <a href="https://codedthemes.com/item/berry-bootstrap-5-admin-template/" target="_blank"
                        class="btn btn-light text-primary">Pro</a>
                </div> --}}
            </div>
        </div>
    </nav>
    <!-- [ Sidebar Menu ] end -->

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            <!-- [ Main Content ] start -->
            <div class="row">
                <!-- [ sample-page ] start -->

                @yield('content')

            </div>
        </div>
    </div>

    <footer class="pc-footer">
        <div class="footer-wrapper container-fluid">
            <div class="row">
                <div class="col my-1">
                    <p class="m-0">Copyright &copy; <a href="https://codedthemes.com/"
                            target="_blank">BlueBook</a></p>
                </div>
                <div class="col-auto my-1">
                    <ul class="list-inline footer-link mb-0">
                        <li class="list-inline-item"><a href="{{ route('dashboard') }}" target="_blank">Início</a>
                        </li>
                        {{-- <li class="list-inline-item"><a href="https://codedthemes.com/privacy-policy/"
                                target="_blank">Privacy Policy</a></li> --}}
                        <li class="list-inline-item"><a href="" target="_blank">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>





    <!-- Required Js -->
    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <script src="{{ asset('assets/js/pcoded.js') }}"></script>


    <!-- [Page Specific JS] start -->
    <!-- Apex Chart -->
    <script src="{{ asset('assets/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/dashboard-default.js') }}"></script>
    <!-- [Page Specific JS] end -->
</body>

</html>
