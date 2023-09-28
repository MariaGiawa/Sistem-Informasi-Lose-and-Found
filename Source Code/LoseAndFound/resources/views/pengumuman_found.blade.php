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
<title>Penemuan Barang - Lose and Found</title>

<!-- BOOTSTRAP CSS -->
<link id="style" href="{{asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />

<!-- STYLE CSS -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/dark-style.css')}}" rel="stylesheet"/>
<link href="{{asset('assets/css/skin-modes.css')}}" rel="stylesheet" />
<link href="{{asset('assets/css/transparent-style.css')}}" rel="stylesheet" />

<!--- FONT-ICONS CSS -->
<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet"/>

<!-- COLOR SKIN CSS -->
<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/colors/color1.css')}}" />

</head>

	<body class="app sidebar-mini ltr light-mode">

		<!-- GLOBAL-LOADER -->
        <div id="global-loader">
			<img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
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
                                                @if(auth()->user()->is_admin==1)
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
                                                @else
                                                @auth
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                    <div class="drop-heading">
                                                        <div class="text-center p-1">
                                                        <div class="p-0 pb-4">
                                                            <img alt="user-img" class="avatar avatar-xl brround mx-auto text-center" src="../assets/image/user.png"><span class="avatar-status profile-status bg-green p-1 "></span> 
                                                        </div>
                                                            <h5 class="text-dark mb-0 text-capitalize">{{auth()->user()->username}}</h5>
                                                            <small class="text-muted">Mahasiswa</small>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="dropdown-divider m-0"></div>
                                                    <a class="dropdown-item" href="/profile_user">
                                                        <i class="dropdown-icon fe fe-user"></i> Profile
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('logout') }}">
                                                        <i class="dropdown-icon fe fe-power"></i> Sign out
                                                    </a>
                                                </div>
                                                @endauth
                                                @endif
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
                    <aside class="app-sidebar ">
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
                                    <a class="side-menu__item" data-bs-toggle="slide" href="{{route('home')}}"><i class="side-menu__icon fe fe-home"></i><span class="side-menu__label">Dashboard</span></a>
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
									<h1 class="page-title">Pengumuman Penemuman Barang</h1>
									<ol class="breadcrumb">
                                        <li class="breadcrumb-item" aria-current="page"><a href="{{route('home')}}">Home</a></li>
										<li class="breadcrumb-item"><a href="">Pengumuman</a></li>										
                                        <li class="breadcrumb-item active" aria-current="page">Found</li>
									</ol>
								</div>
								<div class="ms-auto pageheader-btn">
									
                                    <a href="pengumuman_found/create" class="btn btn-teal btn-icon text-white">
										<span>
											<i class="fe fe-plus"></i>
										</span> Tambah Pengumuman
									</a>
                                    
								</div>
							</div>
							<!-- PAGE-HEADER END -->
                                @foreach ($pengumuman_found as $item)
                                @if($item->jenis_id==2)
							<div class="modal fade"  id="modaldemo{{ $item->id_peng }}">
                            <div class="modal-dialog modal-dialog-centered text-center col-md-6" role="document">
                                <div class="modal-content modal-content-demo">
                                    <div class="modal-header">
                                        <h6 class="modal-title fw-bold fs-16">Detail Pengumuman</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal" ><span aria-hidden="true">&times;</span></button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="card">
                                        <img class="card-img-top br-7 br-bl-0 br-br-0 mx-auto" style="width: 500px; height:250px;" src="{{ asset('assets/image/'.$item->gambar)}}" alt="Image">
                                        <div class="card-body">
                                            <div class="d-md-flex justify-content-evenly">
                                                <a href="javascript:void(0);" class="d-flex me-4 mb-2"><i class="fe fe-calendar fs-16 me-1 p-3 bg-secondary-transparent text-secondary bradius"></i>
                                                    <div class="mt-0 mt-1 ms-1 text-muted font-weight-semibold">{{ \Carbon\Carbon::parse($item->created)->translatedFormat('l, d F Y')}}
                                                        <br> <small class="d-block text-muted text-start">{{ \Carbon\Carbon::parse($item->created)->translatedFormat('H:i:s')}}</small>
                                                    </div>
                                                </a>
                                                <a href="https://wa.me/+62{{$item->nohp}}" target="_blank" class="d-flex me-4 mb-2"><i class="fe fe-message-circle fs-16 me-1 p-3 bg-primary-transparent text-primary bradius"></i>
                                                    <div class="mt-0 mt-1 ms-1 text-muted font-weight-semibold text-capitalize text-nowrap">{{$item->nama}}
                                                       <br> <small class="d-block text-muted text-start">Contact Me</small>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="card-body text-start col-md-12">
                                            <table>
                                            <tr>
                                                <td class="col-md-5 ">Nama Barang</td>
                                                <td class="col-md-0">:</td>
                                                <td class="col-md-8">{{$item->nama_item}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-5 ">Merk Barang</td>
                                                <td class="col-md-0">:</td>
                                                <td class="col-md-8 ">{{$item->merk}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-5 ">Lokasi Ditemukan</td>
                                                <td class="col-md-0">:</td>
                                                <td class="col-md-8 ">{{$item->lokasi}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-5 ">Tanggal Ditemukan</td>
                                                <td class="col-md-0">:</td>
                                                <td class="col-md-8 text-nowrap">{{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('l, d F Y')}} Pukul {{ \Carbon\Carbon::parse($item->tanggal)->translatedFormat('H:i:s')}}</td>
                                            </tr>
                                            <tr>
                                                <td class="col-md-5 ">Deskripsi Barang</td>
                                                <td class="col-md-0">:</td>
                                                <td class="col-md-8">{{$item->deskripsi}}</td>
                                            </tr>
                                            </table>
                                            <div class="container d-flex justify-content-between">
                                                <div class="text-start mt-5">
                                                    @foreach($admin as $adm)
                                                    <a href="https://wa.me/+62{{$adm->nohp}}" target="_blank" class="d-flex me-4 mb-2"><i class="fe fe-user fs-16 me-1 p-3 bg-info-transparent text-primary bradius"></i>
                                                        <div class="mt-0 mt-1 ms-1 text-muted font-weight-semibold text-capitalize">{{$adm->nama}}
                                                        <br> <small class="d-block text-muted text-start">Contact Admin</small>
                                                        </div>
                                                    </a>
                                                    @endforeach    
                                                </div>
                                                <div class="text-end mt-5">
                                                    Diperbarui {{ \Carbon\Carbon::parse($item->updated)->diffForHumans() }}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer">
                                         <button class="btn btn-gray" data-bs-dismiss="modal" >Close</button>
                                    </div>
                                </div>
                            </div>
                            </div>
                                @endif
                                @endforeach
							<!-- Row -->
                            
							<div class="row row-sm">
								<div class="col-lg-12">
									<div class="card">
										<div class="card-header justify-content-between">
											<div class="card-title">Daftar Pengumuman Penemuan Barang</div>
                                            @if(session('status'))
                                                <div class="alert alert-success alert-dismissible fade show col-md-6 p-3" role="alert">
                                                     <i class="fa fa-check-circle-o me-2" aria-hidden="true"></i> {{session('status')}}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">×</span>
                                                    </button>
                                                </div>
                                             @endif
										    </div>
										<div class="card-body">
											<div class="table-responsive">
												<table class="table table-bordered text-wrap border-bottom w-100" id="basic-datatable">
													<thead>
														<tr>
                                                            <th class="wd-1p border-bottom-0" style="width: 1rem;">No</th>															
															<th class="wd-15p border-bottom-0" style="width: 5rem;">Nama Barang</th>
															<th class="wd-20p border-bottom-0" style="width: 5rem;">Merk Barang</th>
                                                            <th class="wd-20p border-bottom-0" style="width: 10rem;">Deskripsi Barang</th>
															<th class="wd-15p border-bottom-0" style="width: 4rem;">Waktu</th>
                                                            <th class="wd-1p border-bottom-0" style="width: 1rem;">Status Barang</th>
															<th class="wd-10p border-bottom-0" style="width: 11rem;">Aksi</th>
														</tr>
													</thead>
													<tbody>
                                                        @foreach ($pengumuman_found as $key => $item)                                                        
                                                        @if($item->jenis_id==2)
                                                        <tr>
                                                            <td>
                                                                {{$i++}}
                                                            </td>
															<td class="text-capitalize">{{$item->nama_item}}</td>
															<td class="text-capitalize">{{$item->merk}}</td>
                                                            <td >Ditemukan di {{$item->lokasi}}, {{$item->deskripsi}}</td>
															<td>{{ \Carbon\Carbon::parse($item->created)->diffForHumans() }}</td>
                                                            @if($item->status == 'Pihak Ketertiban')
                                                            <td class="text-center"><span class="badge bg-primary-gradient">Pada {{$item->status}}</span></td>
                                                            @else
                                                            <td class="text-center"><span class="badge bg-info-gradient">Pada {{$item->status}}</span></td>
                                                            @endif
															<td class="text-center">
                                                                <form action="{{route('pengumuman_found.destroy',$item->id_peng)}}" method="POST"> 
                                                                    @method('DELETE')                                                                   
                                                                    @csrf
                                                                    <span class="modal-effect" data-bs-effect="effect-flip-horizontal" data-bs-toggle="modal" href="#modaldemo{{ $item->id_peng }}">
                                                                        <a data-bs-placement="top" data-bs-toggle="tooltip" title="Lihat Detail" class="btn btn-icon btn-info mx-1 mb-1" ><i class="fe fe-eye"></i></a>
                                                                    </span>                                                                
                                                                    @if((Auth::user()->id==$item->user_id))
                                                                    <a type="button" data-bs-placement="top" href="pengumuman_found/{{$item->id_peng}}/edit" method="GET" data-bs-toggle="tooltip" title="Edit Pengumuman" class="btn btn-icon btn-cyan mx-1 mb-1"><i class="fe fe-edit"></i></a>
                                                                    <button type="submit" data-bs-placement="top" data-bs-toggle="tooltip" title="Arsip Pengumuman" class="btn btn-icon btn-danger mx-1 mb-1"><i class="fe fe-folder-plus"></i></button>
                                                                    @else
                                                                    @can('admin')
                                                                    <a type="button" data-bs-placement="top" href="pengumuman_found/{{$item->id_peng}}/edit" method="GET" data-bs-toggle="tooltip" title="Edit Pengumuman" class="btn btn-icon btn-cyan mx-1 mb-1"><i class="fe fe-edit"></i></a>
                                                                    <button type="submit" data-bs-placement="top" data-bs-toggle="tooltip" title="Arsip Pengumuman" class="btn btn-icon btn-danger mx-1 mb-1"><i class="fe fe-folder-plus"></i></button>                                                                          
                                                                    @endcan
                                                                    @endif          
                                                                </form>
                                                                
                                                            </td>
														</tr>
                                                        @endif
                                                        @endforeach
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- End Row -->

						</div>
					</div>
				</div>
				<!-- CONTAINER CLOSED -->
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
			<!-- FOOTER CLOSED -->
		</div>

		<!-- BACK-TO-TOP -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

		<!-- JQUERY JS -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- CHARTJS CHART JS-->
		<script src="{{asset('assets/plugins/chart/Chart.bundle.js')}}"></script>
		<script src="{{asset('assets/plugins/chart/utils.js')}}"></script>

		<!-- C3 CHART JS -->
		<script src="{{asset('assets/plugins/charts-c3/d3.v5.min.js')}}"></script>
		<script src="{{asset('assets/plugins/charts-c3/c3-chart.js')}}"></script>

		<!-- INPUT MASK JS-->
		<script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

		<!-- SELECT2 JS -->
		<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
		<script src="{{asset('assets/js/select2.js')}}"></script>

        <script src="{{asset('assets/plugins/fileuploads/js/fileupload.js')}}"></script>
        <script src="{{asset('assets/plugins/fileuploads/js/file-upload.js')}}"></script>
		<!-- SIDE-MENU JS-->
        <script src="{{asset('assets/plugins/sidemenu/sidemenu.js')}}"></script>

        <!-- Sticky js -->
        <script src="{{asset('assets/js/sticky.js')}}"></script>

		<!-- SIDEBAR JS -->
		<script src="{{asset('assets/plugins/sidebar/sidebar.js')}}"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>
		<script src="{{asset('assets/plugins/p-scroll/pscroll.js')}}"></script>
		<script src="{{asset('assets/plugins/p-scroll/pscroll-1.js')}}"></script>

        <!-- SWEET-ALERT JS -->
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/js/sweet-alert.js')}}"></script>

        <script src="../assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
		<script src="../assets/plugins/datatable/js/dataTables.buttons.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.bootstrap5.min.js"></script>
		<script src="../assets/plugins/datatable/js/jszip.min.js"></script>
		<script src="../assets/plugins/datatable/pdfmake/pdfmake.min.js"></script>
		<script src="../assets/plugins/datatable/pdfmake/vfs_fonts.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.html5.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.print.min.js"></script>
		<script src="../assets/plugins/datatable/js/buttons.colVis.min.js"></script>
		<script src="../assets/plugins/datatable/dataTables.responsive.min.js"></script>
		<script src="../assets/plugins/datatable/responsive.bootstrap5.min.js"></script>
		<script src="../assets/js/table-data.js"></script>

        <!-- Color Theme js -->
        <script src="{{asset('assets/js/themeColors.js')}}"></script>

		<!-- CUSTOM JS -->
		<script src="{{asset('assets/js/custom.js')}}"></script>
	</body>
</html>