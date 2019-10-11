<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Admin Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="/admin/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="/admin/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="/admin/plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="/admin/plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="/admin/plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="/DataTables/DT/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" type="text/css" href="/DataTables/DT/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="/DataTables/datatables.min.css"/>
    <link href="/admin/css/style.css" rel="stylesheet">
    <link href="/admin/plugins/sweetalert/sweetalert.css" rel="stylesheet" />
    
    {{--  <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">  --}}

    <!-- Bootstrap Select Css -->
    <link href="/admin/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

    <!-- Bootstrap Material Datetime Picker Css -->
    <link href="/admin/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" />

    <!-- Bootstrap DatePickaer Css -->
    <link href="/admin/plugins/bootstrap-datepicker/css/bootstrap-datepicker.css" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="/admin/css/themes/all-themes.css" rel="stylesheet" />
    @yield('css')
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="/">BOOK</a>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="/admin/images/user.png" width="48" height="48" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</div>
                    <div class="email">{{ Auth::user()->email }}</div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                                    <i class="material-icons">input</i>
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="active">
                        <a href="/home">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>
                    <li>
                        {{--  @guest
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Peminjaman</a>
                            </li>
                        </ul>
                        @role('admin')
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="">Buku</a>
                            </li>
                            <li>
                                <a href="">Detail Pinjam</a>
                            </li>
                            <li>
                                <a href="">Kartu Pendaftaran</a>
                            </li>
                            <li>
                                <a href="">Kategori</a>
                            </li>
                            <li>
                                <a href="">Peminjam</a>
                            </li>
                            <li>
                                <a href="">Peminjaman</a>
                            </li>
                            <li>
                                <a href="">Penerbit</a>
                            </li>
                            <li>
                                <a href="">Petugas</a>
                            </li>
                            <li>
                                <a href="">User</a>
                            </li>
                        </ul>
                        @endguest
                        @endrole  --}}
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Forms</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                                <a href="/backend/buku">Buku</a>
                            </li>
                            <li>
                                <a href="/backend/detailpinjam">Detail Pinjam</a>
                            </li>
                            <li>
                                <a href="/backend/kartupendaftaran">Kartu Pendaftaran</a>
                            </li>
                            @role('admin')
                            <li>
                                <a href="/backend/kategori">Kategori</a>
                            </li>
                            @endrole
                            <li>
                                <a href="/backend/peminjam">Peminjam</a>
                            </li>
                            <li>
                                <a href="/backend/peminjaman">Peminjaman</a>
                            </li>
                            @role('admin')
                            <li>
                                <a href="/backend/penerbit">Penerbit</a>
                            </li>
                            <li>
                                <a href="/backend/petugas">Petugas</a>
                            </li>
                            <li>
                                <a href="/backend/user">User</a>
                            </li>
                            @endrole
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- #Menu -->
            <!-- Footer -->
            <div class="legal">
                <div class="copyright">
                    &copy; 2019 <a href="https://azisnurjaman50.blogspot.com">Team Grizi</a>.
                </div>
            </div>
            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->
    </section>

    <section class="content">
        @yield('content')
    </section>

    <!-- Jquery Core Js -->
    <script src="/admin/plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="/admin/plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="/admin/plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="/admin/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="/admin/plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="/admin/plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Morris Plugin Js -->
    <script src="/admin/plugins/raphael/raphael.min.js"></script>
    <script src="/admin/plugins/morrisjs/morris.js"></script>

    <!-- ChartJs -->
    <script src="/admin/plugins/chartjs/Chart.bundle.js"></script>

    <!-- Flot Charts Plugin Js -->
    {{--  <script src="/admin/plugins/flot-charts/jquery.flot.js"></script>
    <script src="/admin/plugins/flot-charts/jquery.flot.resize.js"></script>
    <script src="/admin/plugins/flot-charts/jquery.flot.pie.js"></script>
    <script src="/admin/plugins/flot-charts/jquery.flot.categories.js"></script>
    <script src="/admin/plugins/flot-charts/jquery.flot.time.js"></script>  --}}

    <!-- Sparkline Chart Plugin Js -->
    <script src="/admin/plugins/jquery-sparkline/jquery.sparkline.js"></script>

    <!-- Custom Js -->
    {{--  <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>  --}}
    <script src="/admin/js/admin.js"></script>
    <script src="/admin/js/pages/index.js"></script>
    <script src="/admin/js/pages/ui/dialogs.js"></script>
    <script src="/admin/plugins/bootstrap-notify/bootstrap-notify.js"></script>
    <script src="/admin/plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Bootstrap Material Datetime Picker Plugin Js -->
    <script src="/admin/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js"></script>

    <!-- Bootstrap Datepicker Plugin Js -->
    <script src="/admin/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>

    {{--  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>  --}}

    <!-- Demo Js -->
    <script src="/admin/js/demo.js"></script>
    <script src="/DataTables/DT/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/DataTables/datatables.min.js"></script>
    @yield('js')
</body>

</html>
