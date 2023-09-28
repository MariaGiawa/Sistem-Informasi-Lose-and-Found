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
		<title>Login - Lose and Found</title>

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

	<body>

		<!-- BACKGROUND-IMAGE -->
		<div class="login-imgs">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div class="">

				    <!-- CONTAINER OPEN -->
					
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form class="login100-form validate-form" action="{{route('login.action')}}" method="POST">
                                                               @csrf
									<span class="login100-form-title">
										Login
									</span>
                                                               @if(session('status'))
                                                               <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                                      {{session('status')}}
                                                                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                                               </div>
                                                               @endif
                                                               @if(session()->has('loginError'))
                                                                      <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                                             {{session('loginError')}}
                                                                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close"></button>
                                                                      </div>
                                                               @endif
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100 @error('username') is-invalid @enderror" autocomplete="off" type="text" name="username" placeholder="Username">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="mdi mdi-account symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('username')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100 @error('password') is-invalid @enderror" type="password" name="password" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock symbol-input100 pt-3 " aria-hidden="true"></i>
										</span>
                                                                      @error('password')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div><br>
									
									<div class="container-login100-form-btn">
										<button type="submit" class="login100-form-btn btn-teal" id="click5">
											Login
										</button>
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Not a member?<a href="{{route('register')}}" class="text-teal ms-1">Create an Account</a></p>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- End PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="{{asset('assets/js/jquery.min.js')}}"></script>

		<!-- BOOTSTRAP JS -->
		<script src="{{asset('assets/plugins/bootstrap/js/popper.min.js')}}"></script>
		<script src="{{asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>

		<!-- SPARKLINE JS -->
		<script src="{{asset('assets/js/jquery.sparkline.min.js')}}"></script>

		<!-- CHART-CIRCLE JS -->
		<script src="{{asset('assets/js/circle-progress.min.js')}}"></script>

		<!-- SWEET-ALERT JS
		<script src="{{asset('assets/plugins/sweet-alert/sweetalert.min.js')}}"></script>
		<script src="{{asset('assets/js/sweet-alert.js')}}"></script> -->

		<!-- Perfect SCROLLBAR JS-->
		<script src="{{asset('assets/plugins/p-scroll/perfect-scrollbar.js')}}"></script>

		<!-- INPUT MASK JS -->
		<script src="{{asset('assets/plugins/input-mask/jquery.mask.min.js')}}"></script>

        <!-- Color Theme js -->
        <script src="{{asset('assets/js/themeColors.js')}}"></script>

        <!-- CUSTOM JS -->
        <script src="{{asset('assets/js/custom.js')}}"></script>

	</body>
</html>
