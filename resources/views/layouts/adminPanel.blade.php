<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title>Admin Panel</title>
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('img/favicon.png') }}">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- Icons -->
    <link href="{{ asset('vendor/nucleo/css/nucleo.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/@fortawesome/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Argon CSS -->
    <link type="text/css" href="{{ asset('css/argon.css?v=1.0.0') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link type="text/css" href="{{ asset('css/admincustom.css') }}" rel="stylesheet">
    <!-- Jordy CSS -->
    <link rel="stylesheet" href="{{ asset('css/jodit.min.css') }}">
    <!-- Custom Jordy CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/customJordy.css') }}" rel="stylesheet">
    {{-- Data Table CSS--}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
</head>

<body>
    <!-- Sidenav -->
    <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main"
                aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand pt-0" href="{{ url('/admin') }}">
                <img src="{{ asset('img/logo.png') }}" class="navbar-brand-img" alt="...">
            </a>
            <!-- User -->
            <ul class="nav align-items-center d-md-none">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <i class="ni ni-bell-55"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right"
                        aria-labelledby="navbar-default_dropdown_1">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false">
                        <div class="media align-items-center">
                            <span class="avatar avatar-sm rounded-circle">
                                <img alt="Image placeholder" src="{{ asset('img/user_picture/team-4-800x800.jpg') }}">
                            </span>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                        <div class=" dropdown-header noti-title">
                            <h6 class="text-overflow m-0">Welcome!</h6>
                        </div>
                        <a href="{{ url('/admin/profilku') }}" class="dropdown-item">
                            <i class="ni ni-single-02"></i>
                            <span>My profile</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="{{ url('/admin/logout') }}" class="dropdown-item">
                            <i class="ni ni-user-run"></i>
                            <span>Logout</span>
                        </a>
                    </div>
                </li>
            </ul>
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Collapse header -->
                <div class="navbar-collapse-header d-md-none">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="../index.html">
                                <img src="{{ asset('img/user_picture/team-4-800x800.jpg') }}">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse"
                                data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false"
                                aria-label="Toggle sidenav">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <!-- Form -->
                <form class="mt-4 mb-3 d-md-none">
                    <div class="input-group input-group-rounded input-group-merge">
                        <input type="search" class="form-control form-control-rounded form-control-prepended"
                            placeholder="Search" aria-label="Search">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <span class="fa fa-search"></span>
                            </div>
                        </div>
                    </div>
                </form>
                <!-- Navigation -->

                <hr class="my-3">

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('admin/statistik')) {{'active'}} @endif"
                            href="{{ url('/admin/statistik') }}">
                            <i class="ni ni-tv-2 text-primary"></i> Statistik Web
                        </a>
                    </li>

                </ul>

                <hr class="my-3">

                <h6 class="navbar-heading text-muted">Manajemen Artikel</h6>

                <ul class="navbar-nav mb-md-3">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('admin/buat-artikel')) {{'active'}} @endif"
                            href="{{ url('admin/buat-artikel') }}">
                            <i class="ni ni-ruler-pencil text-success"></i> Buat Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('admin/kelola-artikel')) {{'active'}} @endif"
                            href="{{ url('admin/kelola-artikel') }}">
                            <i class="ni ni-single-copy-04 text-info"></i> Kelola Artikel
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('admin/draft-artikel')) {{'active'}} @endif"
                            href="{{ url('admin/draft-artikel') }}">
                            <i class="ni ni-bullet-list-67 text-warning"></i> Draft Artikel
                            <span class="badge badge-pill badge-warning">2</span>
                        </a>
                    </li>
                </ul>

                <hr class="my-3">

                <h6 class="navbar-heading text-muted">Manajemen User</h6>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('admin/kelola-user')) {{'active'}} @endif"
                            href="{{ url('/admin/kelola-user') }}">
                            <i class="fas fa-user-friends text-danger"></i> Kelola User
                        </a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link @if(Request::is('admin/buat-user')) {{'active'}} @endif"
                            href="{{ url('/admin/buat-user') }}">
                            <i class="ni ni-single-02 text-primary"></i> Buat User
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <!-- Main content -->
    <div class="main-content">
        <!-- Top navbar -->
        <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
            <div class="container-fluid">
                <!-- Brand -->
                <a class="h4 mb-0 text-white text-uppercase d-none d-lg-inline-block"
                    href="{{ url('#') }}">@yield('title')</a>
                <!-- Form -->
                <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
                    <div class="form-group mb-0">
                        <div class="input-group input-group-alternative">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-search"></i></span>
                            </div>
                            <input class="form-control" placeholder="Search" type="text">
                        </div>
                    </div>
                </form>
                <!-- User -->
                <ul class="navbar-nav align-items-center d-none d-md-flex">
                    <li class="nav-item dropdown">
                        <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="media align-items-center">
                                <span class="avatar avatar-sm rounded-circle">
                                    <img alt="Image placeholder"
                                        src="{{ asset('img/user_picture/team-4-800x800.jpg') }}">
                                </span>
                                <div class="media-body ml-2 d-none d-lg-block">
                                    <span class="mb-0 text-sm  font-weight-bold">Fathil Arham (Admin)</span>
                                </div>
                            </div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
                            <div class=" dropdown-header noti-title">
                                <h6 class="text-overflow m-0">Welcome!</h6>
                            </div>
                            <a href="{{ url('/admin/profil') }}" class="dropdown-item">
                                <i class="ni ni-single-02"></i>
                                <span>Profil</span>
                            </a>
                            <div class="dropdown-divider"></div>
                            <a href="{{ url('/admin/logout') }}" class="dropdown-item">
                                <i class="ni ni-user-run"></i>
                                <span>Logout</span>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- Header -->
        @yield('header')
        <!-- Page content -->
        <div class="container-fluid mt--7">
            @yield('content')
            <!-- Footer -->
            <footer class="footer">
                <div class="row align-items-center justify-content-xl-between">
                    <div class="col-xl-6">
                        <div class="copyright text-center text-xl-left text-muted">
                            &copy; 2019 <a href="http://hmti.dinus.ac.id" class="font-weight-bold ml-1"
                                target="_blank">HMTI TechDev Team</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <ul class="nav nav-footer justify-content-center justify-content-xl-end">
                            <li class="nav-item">
                                <a href="http://hmti.dinus.ac.id" class="nav-link" target="_blank">Creative Tim</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://hmti.dinus.ac.id/visi-dan-misi/" class="nav-link" target="_blank">About
                                    Us</a>
                            </li>
                            <li class="nav-item">
                                <a href="http://hmti.dinus.ac.id" class="nav-link" target="_blank">Web Link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Argon Scripts -->
    <!-- Core -->
    <script src="{{ asset('vendor/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('vendor/chart.js/dist/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/chart.js/dist/Chart.extension.js') }}"></script>
    <!-- Argon JS -->
    <script src="{{ asset('js/argon.js?v=1.0.0') }}"></script>
    <script src="{{ asset('js/customAdmin.js') }}"></script>

    {{-- Jodit WYSIWYG JS --}}
    <script src="{{ asset('js/jodit.min.js')}}"></script>

    {{-- Data Table JS --}}
    <script type="text/javascript" src="{{ asset('js/jquery.dataTables.js')}}"></script>

    {{-- Data Table Bootstrap 4 Integration  JS--}}
    <script type="text/javascript" src="{{ asset('js/dataTables.bootstrap4.min.js')}}"></script>

    {{-- JS Init --}}
    <script>
        // Data Table Init
        $(document).ready( function () {
            $('#article_table').DataTable({
                "info": false,
                "lengthMenu": [ 5, 10, 15, 20, 25 ],
                "pageLength": 5,
                "columnDefs": [{ "orderable": false, "targets": 5 },
                                 {"searchable": false, "targets": 5}]
            });

            $('#users_table').DataTable({
                "info": false,
                "lengthMenu": [ 5, 10, 15, 20 ],
                "pageLength": 5,
                "columnDefs": [{ "orderable": false, "targets": 4 },
                                 {"searchable": false, "targets": 4}]
            });
        } );

        // WYSIWYG Init
        var editor = new Jodit("#editor", {
            "spellcheck": false,
            "buttons": "paragraph,,,,,,,|,fontsize,,brush,|,indent,,align,,ul,ol,|,table,link,|,undo,redo,\n,cut,hr,eraser,copyformat,|,symbol,fullsize,selectall,print"
        });

        $('input[type="file"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('.custom-file-label').html(fileName);
        });


    </script>
</body>

</html>
