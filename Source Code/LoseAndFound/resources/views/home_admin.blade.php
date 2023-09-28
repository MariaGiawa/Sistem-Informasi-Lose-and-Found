<!doctype html>
<html lang="en" dir="ltr">

    <head>

        <!-- META DATA -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="Zanex – Bootstrap  Admin & Dashboard Template">
        <meta name="author" content="Spruko Technologies Private Limited">
        <meta name="keywords" content="admin, dashboard, dashboard ui, admin dashboard template, admin panel dashboard, admin panel html, admin panel html template, admin panel template, admin ui templates, administrative templates, best admin dashboard, best admin templates, bootstrap 4 admin template, bootstrap admin dashboard, bootstrap admin panel, html css admin templates, html5 admin template, premium bootstrap templates, responsive admin template, template admin bootstrap 4, themeforest html">

        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/image/logo_icon.jpeg')}}" />

        <!-- TITLE -->
        <title>Home - Lose And Found </title>

        <!-- BOOTSTRAP CSS -->
        <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

        <!-- STYLE CSS -->
        <link href="../assets/css/style.css" rel="stylesheet" />
        <link href="../assets/css/dark-style.css" rel="stylesheet" />
        <link href="../assets/css/skin-modes.css" rel="stylesheet" />
        <link href="../assets/css/transparent-style.css" rel="stylesheet" />

        <!--- FONT-ICONS CSS -->
        <link href="../assets/css/icons.css" rel="stylesheet" />

        <!-- COLOR SKIN CSS -->
        <link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

    </head>

    <body class="app sidebar-mini ltr light-mode">

        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <!-- /GLOBAL-LOADER -->

        <!-- PAGE -->
        <div class="page">
            <div class="page-main">

                <!-- app-Header -->
                <div class="app-header header sticky">
                    <div class="container-fluid main-container">
                        <div class="d-flex align-items-center">
                            <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0);"></a>
                            <div class="responsive-logo">
                            <a href="{{route('home')}}" class="header-logo">
                                    <img src="{{asset('assets/image/logo_lf1.jpeg')}}" style="width:100px;height:50px;;margin-top:-5px;" class="mobile-logo logo-1" alt="logo">
                                    <img src="{{asset('assets/image/logo_lf1.jpeg')}}" style="width:100px;height:50px;;margin-top:-5px;" class="mobile-logo dark-logo-1" alt="logo">
                                </a>
                            </div>
                            <!-- sidebar-toggle-->
                            <a class="logo-horizontal " href="index.html">
                                <img src="../assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
                                <img src="../assets/images/brand/logo-3.png" class="header-brand-img light-logo1"
                                    alt="logo">
                            </a>
                            <!-- LOGO -->
                            
                            <div class="d-flex order-lg-2 ms-auto header-right-icons">
                                <!-- SEARCH -->
                                <button class="navbar-toggler navresponsive-toggler d-lg-none ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon fe fe-more-vertical text-dark"></span>
                                    </button>
                                <div class="navbar navbar-collapse responsive-navbar p-0">
                                    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                        <div class="d-flex order-lg-2">
                                            <div class="dropdown d-block d-lg-none">
                                                <a href="javascript:void(0);" class="nav-link icon" data-bs-toggle="dropdown">
                                                    <i class="fe fe-search"></i>
                                                </a>
                                                <div class="dropdown-menu header-search dropdown-menu-start">
                                                    <div class="input-group w-100 p-2">
                                                        <input type="text" class="form-control" placeholder="Search....">
                                                        <div class="input-group-text btn btn-primary">
                                                            <i class="fa fa-search" aria-hidden="true"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown d-md-flex">
                                                <a class="nav-link icon theme-layout nav-link-bg layout-setting">
                                                    <span class="dark-layout"><i class="fe fe-moon"></i></span>
                                                    <span class="light-layout"><i class="fe fe-sun"></i></span>
                                                </a>
                                            </div>
                                            <!-- Theme-Layout -->
                                            <div class="dropdown d-md-flex">
                                                <a class="nav-link icon full-screen-link nav-link-bg">
                                                    <i class="fe fe-minimize fullscreen-button" id="myvideo"></i>
                                                </a>
                                            </div>
                                            <!-- FULL-SCREEN -->
                                            <!-- NOTIFICATIONS -->
                                            <!-- MESSAGE-BOX -->
                                            <div class="dropdown d-md-flex profile-1">
                                                <a href="javascript:void(0);" data-bs-toggle="dropdown" class="nav-link leading-none d-flex px-1">
                                                    <span>
                                                            <img src="../assets/image/user.png" alt="profile-user" class="avatar profil  profile-user brround cover-image">
                                                        </span>
                                                </a>
                                                
                                                
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading">
                                                        <div class="text-center p-1">
                                                        <div class="p-0 pb-4">
                                                            <img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="../assets/image/user.png"><span class="avatar-status profile-status bg-green p-1 "></span> 
                                                        </div>
                                                            <h5 class="text-dark mb-0 text-capitalize">{{auth()->user()->username}}</h5>
                                                            <small class="text-muted">Pihak Ketertiban</small>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="dropdown-divider m-0"></div>
                                                    
                                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                                        <i class="dropdown-icon fe fe-power"></i> Sign out
                                                    </a>
                                                    
                                                </div>
                                                
                                            </div>
                                            
                                            <!-- SIDE-MENU -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /app-Header -->

                <!--APP-SIDEBAR-->
                <div class="sticky">
                    <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                    <aside class="app-sidebar">
                        <div class="side-header">
                            <a class="header-brand1" href="{{route('home')}}">
                            <img src="{{asset('assets/image/logo_lf1.jpeg')}}" style="width:80px;height:50px;margin-top:-5px;" class="header-brand-img desktop-logo" alt="logo" />
                                <img src="{{asset('assets/image/logo_lf1.jpeg')}}" style="width:80px;height:50px;margin-top:-5px;" class="header-brand-img toggle-logo" alt="logo" />
                                <img src="{{asset('assets/image/logo_lf1.jpeg')}}" style="width:80px;height:50px;margin-top:-5px;" class="header-brand-img light-logo" alt="logo" />
                                <img src="{{asset('assets/image/logo_lf1.jpeg')}}" style="width:80px;height:50px;margin-top:-5px;" class="header-brand-img light-logo1" alt="logo" />
                            </a>
                            <!-- LOGO -->
                        </div>
                        <div class="main-sidemenu">
                            <div class="slide-left disabled" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg"
                                    fill="#7b8191" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z" />
                                </svg></div>
                            <ul class="side-menu">
                                <li class="sub-category">
                                    <h3>Home</h3>
                                </li>
                                <li class="slide">
                                    <a class="side-menu__item active" data-bs-toggle="slide" href="home_admin"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
                                </li>
                                <li class="sub-category">
                                    <h3>Pengumuman</h3>
                                </li>
                                <li>
                                    <a class="side-menu__item" href="pengumuman_lose"><i class="side-menu__icon fe fe-alert-circle"></i><span class="side-menu__label">Lose</span></a>
                                </li>
                                <li>
                                    <a class="side-menu__item" href="pengumuman_found"><i class="side-menu__icon fe fe-help-circle"></i><span class="side-menu__label">Found</span></a>
                                </li>
                                <li>
                                <a class="side-menu__item" href="/history"><i class="side-menu__icon fe fe-clock"></i><span class="side-menu__label">History</span></a>
                                </li>
                            </ul>
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191"
                                    width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z" />
                                </svg></div>
                        </div>
                    </aside>
                </div>
                <!--/APP-SIDEBAR-->

                <!--app-content open-->
                <div class="main-content app-content mt-0">
                    <div class="side-app">

                        <!-- CONTAINER -->
                        <div class="main-container container-fluid">

                            <!-- PAGE-HEADER -->
                            <div class="page-header">
                                <div>
                                    <h1 class="page-title">Dashboard</h1>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="javascript:void(0);">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                                    </ol>
                                </div>
                            </div>
                            <!-- PAGE-HEADER END -->

                            <!-- ROW-1 -->

                            <div class="row">
                            <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                User Counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="counter-icon bg-primary-gradient box-shadow-primary brround mx-auto">
                                                <i class="fe fe-users text-white mb-5 "></i>
                                            </div>
                                            <h5>Mahasiswa</h5>
                                            <h2 class="counter">{{$countMahasiswa}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Found Counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="counter-icon bg-danger-gradient box-shadow-danger brround mx-auto">
                                                <i class="fe fe-help-circle text-white mb-5 "></i>
                                            </div>
                                            <h5>Penemuan</h5>
                                            <h2 class="counter">{{$found}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL-END -->
                                <div class="col-md-12 col-lg-4 col-xl-4">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">
                                                Lose Counter
                                            </h3>
                                        </div>
                                        <div class="card-body text-center">
                                            <div class="counter-icon bg-secondary-gradient  box-shadow-secondary brround mx-auto">
                                                <i class="fe fe-alert-circle text-white mb-5 "></i>
                                            </div>
                                            <h5>Kehilangan</h5>
                                            <h2 class="counter">{{$lose}}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Informasi Website</h3>
                                        </div>
                                        <div class="card-body pb-0 mt-2">
                                            <div id="" class="chart-donut"><h4 class="text-justify lh-base" style="text-indent:50px;">Sistem informasi Lose and Found adalah website yang dapat digunakan oleh mahasiswa IT Del untuk mencari dan menemukan barang yang hilang. Dengan adanya website ini, proses pencarian dan penemuan barang yang hilang akan lebih cepat dan mudah dengan hanya mengisi formulir yang tersedia pada website. Form yang diisi akan otomatis berada pada halaman pengumuman. </h4><h4 class="text-justify lh-base" style="text-indent:50px;"> Untuk mengetahui apa saja barang-barang yang hilang dan ditemukan yang ada pada website ini anda hanya perlu membuka halaman pengumuman dan dapat langsung menghubungi kontak yang membuat pengumuman. Selamat menggunakan!</h4></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- ROW-1 END -->

                            <!-- ROW-3 -->
                            
                            <!-- COL END -->
                            <!-- ROW-3 END -->

                            <!-- ROW-5 -->
                            <div class="row">
                                <div class="col-12 col-sm-12">
                                    <div class="card ">
                                        <div class="card-header">
                                            <h3 class="card-title mb-0">Daftar Pihak Ketertiban</h3>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table id="data-table" class="table table-bordered text-nowrap mb-0">
                                                    <thead class="border-top">
                                                        <tr>
                                                            <th class="bg-transparent border-bottom-0 w-5">No</th>
                                                            <th class="bg-transparent border-bottom-0">Nama</th>
                                                            <th class="bg-transparent border-bottom-0">Prodi</th>
                                                            <th class="bg-transparent border-bottom-0">Angkatan</th>
                                                            <th class="bg-transparent border-bottom-0">Kontak</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach ($pihak_ketertiban as $pk)
                                                        <tr class="border-bottom">
                                                            <td class="text-muted fs-15 fw-semibold text-center">{{$loop->iteration}}</td>
                                                            <td>
                                                                <div class="d-flex">
                                                                    <span class="avatar avatar-md brround mt-1" style="background-image: url(../assets/image/user.png)"></span>
                                                                    <div class="ms-2 mt-0 mt-sm-2 d-block">
                                                                        <h6 class="mb-0 fs-14 fw-semibold">{{$pk->nama}}</h6>
                                                                        <span class="fs-12 text-muted">{{$pk->nim}}</span>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td class="text-muted fs-15 fw-semibold">{{$pk->prodi}} </td>
                                                            <td class="text-muted fs-15 fw-semibold">{{$pk->angkatan}}</td>
                                                            <td class="text-success fs-15 fw-semibold"><a class="text-success" target="_blank" href="https://wa.me/+{{$pk->nohp}}">WhatsApp</a></td>
                                                           
                                                        </tr>
                                                        @endforeach
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- COL END -->
                            </div>
                            <!-- ROW-5 END -->
                        </div>
                        <!-- CONTAINER END -->
                    </div>
                </div>
                <!--app-content end-->
            </div>

            <!-- Sidebar-right -->
            
            <!--/Sidebar-right-->

            <!-- FOOTER -->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright ©<span id="year"></span> LoseAndFoundInformationSystem 
                            <!-- <span id="year"></span><a href="javascript:void(0);"></a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"> Spruko </a> All rights reserved -->
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->
        </div>

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <!-- JQUERY JS -->
        <script src="../assets/js/jquery.min.js"></script>

        <!-- BOOTSTRAP JS -->
        <script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
        <script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!-- SPARKLINE JS-->
        <script src="../assets/js/jquery.sparkline.min.js"></script>

        <!-- CHART-CIRCLE JS-->
        <script src="../assets/js/circle-progress.min.js"></script>

        <!-- CHARTJS CHART JS-->
        <script src="../assets/plugins/chart/Chart.bundle.js"></script>
        <script src="../assets/plugins/chart/utils.js"></script>

        <!-- PIETY CHART JS-->
        <script src="../assets/plugins/peitychart/jquery.peity.min.js"></script>
        <script src="../assets/plugins/peitychart/peitychart.init.js"></script>

        <!-- INTERNAL SELECT2 JS -->
        <script src="../assets/plugins/select2/select2.full.min.js"></script>

        <!-- INTERNAL Data tables js-->
        <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
        <script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
        <script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>

        <!-- ECHART JS-->
        <script src="../assets/plugins/echarts/echarts.js"></script>

        <!-- SIDE-MENU JS-->
        <script src="../assets/plugins/sidemenu/sidemenu.js"></script>

        <!-- Sticky js -->
        <script src="../assets/js/sticky.js"></script>

        <!-- SIDEBAR JS -->
        <script src="../assets/plugins/sidebar/sidebar.js"></script>

        <!-- Perfect SCROLLBAR JS-->
        <script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>
        <script src="../assets/plugins/p-scroll/pscroll.js"></script>
        <script src="../assets/plugins/p-scroll/pscroll-1.js"></script>

        <!-- APEXCHART JS -->
        <script src="../assets/js/apexcharts.js"></script>

        <!-- INDEX JS -->
        <script src="../assets/js/index1.js"></script>

        <!-- Color Theme js -->
        <script src="../assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="../assets/js/custom.js"></script>

    </body>

</html>       
