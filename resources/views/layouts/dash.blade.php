<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Advance Form Element | Kiaalap - Kiaalap Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/kialap/img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/owl.carousel.css">
    <link rel="stylesheet" href="/kialap/css/owl.theme.css">
    <link rel="stylesheet" href="/kialap/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/main.css">
    <!-- educate icon CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/educate-custon-icon.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="/kialap/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="/kialap/css/calendar/fullcalendar.print.min.css">
    <!-- touchspin CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/touchspin/jquery.bootstrap-touchspin.min.css">
    <!-- datapicker CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/datapicker/datepicker3.css">
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/form/themesaller-forms.css">
    <!-- colorpicker CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/colorpicker/colorpicker.css">
    <!-- select2 CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/select2/select2.min.css">
    <!-- chosen CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/chosen/bootstrap-chosen.css">
    <!-- ionRangeSlider CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/ionRangeSlider/ion.rangeSlider.css">
    <link rel="stylesheet" href="/kialap/css/ionRangeSlider/ion.rangeSlider.skinFlat.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="/kialap/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="/kialap/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    <div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="index.html"><img class="main-logo" src="/kialap/img/logo/logo.png" alt="" /></a>
                <strong><a href="index.html"><img src="/kialap/img/logo/logosn.png" alt="" /></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1">
                        <li>
                            <a href="/home">
								<span class="educate-icon educate-home icon-wrap"></span>
								<span class="mini-click-non">Home</span>
							</a>
                            <li>
                                <a class="has-arrow" href="mailbox.html" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Forms</span></a>
                                <ul class="submenu-angle" aria-expanded="false">
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
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="/kialap/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
													<i class="educate-icon educate-nav"></i>
												</button>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                        <div class="header-top-menu tabl-d-n">
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                                <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
															<img src="/kialap/img/product/pro4.jpg" alt="" />
															<span class="admin-name">{{Auth::user()->name}}</span>
															<i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
														</a>
                                                    <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                                onclick="event.preventDefault();
                                                                                document.getElementById('logout-form').submit();"><span class="edu-icon edu-locked author-log-ic"></span>
                                                                {{ __('Logout') }}
                                                            </a>

                                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                            </form>
                                                        </li>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li>
                                            <a href="/home">
                                                <span class="educate-icon educate-home icon-wrap"></span>
                                                <span class="mini-click-non">Home</span>
                                            </a>
                                            <li>
                                                <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-data-table icon-wrap"></span> <span class="mini-click-non">Forms</span></a>
                                                <ul class="submenu-angle" aria-expanded="false">
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
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
            <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list single-page-breadcome">
                                <div class="row">
                                    <div class="table-responsive">
                                        @yield('content')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="/kialap/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="/kialap/js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="/kialap/js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="/kialap/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
		============================================ -->
    <script src="/kialap/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
		============================================ -->
    <script src="/kialap/js/owl.carousel.min.js"></script>
    <!-- sticky JS
		============================================ -->
    <script src="/kialap/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
		============================================ -->
    <script src="/kialap/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
		============================================ -->
    <script src="/kialap/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="/kialap/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
		============================================ -->
    <script src="/kialap/js/metisMenu/metisMenu.min.js"></script>
    <script src="/kialap/js/metisMenu/metisMenu-active.js"></script>
    <!-- touchspin JS
		============================================ -->
    <script src="/kialap/js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
    <script src="/kialap/js/touchspin/touchspin-active.js"></script>
    <!-- colorpicker JS
		============================================ -->
    <script src="/kialap/js/colorpicker/jquery.spectrum.min.js"></script>
    <script src="/kialap/js/colorpicker/color-picker-active.js"></script>
    <!-- datapicker JS
		============================================ -->
    <script src="/kialap/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="/kialap/js/datapicker/datepicker-active.js"></script>
    <!-- input-mask JS
		============================================ -->
    <script src="/kialap/js/input-mask/jasny-bootstrap.min.js"></script>
    <!-- chosen JS
		============================================ -->
    <script src="/kialap/js/chosen/chosen.jquery.js"></script>
    <script src="/kialap/js/chosen/chosen-active.js"></script>
    <!-- select2 JS
		============================================ -->
    <script src="/kialap/js/select2/select2.full.min.js"></script>
    <script src="/kialap/js/select2/select2-active.js"></script>
    <!-- ionRangeSlider JS
		============================================ -->
    <script src="/kialap/js/ionRangeSlider/ion.rangeSlider.min.js"></script>
    <script src="/kialap/js/ionRangeSlider/ion.rangeSlider.active.js"></script>
    <!-- rangle-slider JS
		============================================ -->
    <script src="/kialap/js/rangle-slider/jquery-ui-1.10.4.custom.min.js"></script>
    <script src="/kialap/js/rangle-slider/jquery-ui-touch-punch.min.js"></script>
    <script src="/kialap/js/rangle-slider/rangle-active.js"></script>
    <!-- knob JS
		============================================ -->
    <script src="/kialap/js/knob/jquery.knob.js"></script>
    <script src="/kialap/js/knob/knob-active.js"></script>
    <!-- tab JS
		============================================ -->
    <script src="/kialap/js/tab.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="/kialap/js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="/kialap/js/main.js"></script>
    <script src="/ckeditor/ckeditor/ckeditor.js"></script>
     <!-- icheck JS
		============================================ -->
    <script src="/kialap/js/icheck/icheck.min.js"></script>
    <script src="/kialap/js/icheck/icheck-active.js"></script>
    <script type="text/javascript" src="/DataTables/js/jquery.dataTables.js"></script> 
    <script type="text/javascript" src="/DataTables/datatables.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#tab').DataTable();
        
    });
</script>
    @yield('js')
</body>

</html>
