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
		<title>Lose and Found - Registration</title>

		<!-- BOOTSTRAP CSS -->
		<link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

		<!-- STYLE CSS -->
		<link href="../assets/css/style.css" rel="stylesheet"/>
		<link href="../assets/css/dark-style.css" rel="stylesheet"/>
        <link href="../assets/css/skin-modes.css" rel="stylesheet" />
        <link href="../assets/css/transparent-style.css" rel="stylesheet" />

		<!--- FONT-ICONS CSS -->
		<link href="../assets/css/icons.css" rel="stylesheet"/>

		<!-- COLOR SKIN CSS -->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="../assets/colors/color1.css" />

	</head>

	<body>

		<!-- BACKGROUND-IMAGE -->
		<div class="login-imgs">

			<!-- GLOABAL LOADER -->
			<div id="global-loader">
				<img src="../assets/images/loader.svg" class="loader-img" alt="Loader">
			</div>
			<!-- /GLOABAL LOADER -->

			<!-- PAGE -->
			<div class="page">
				<div class="">

				    <!-- CONTAINER OPEN -->
 
					<div class="container-login100">
						<div class="wrap-login100 p-0">
							<div class="card-body">
								<form action="{{ route('register.action') }}" class="login100-form validate-form" method="POST">
                                                               @csrf
									<span class="login100-form-title">
										Registration
									</span>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100  @error('username') is-invalid @enderror" autocomplete="off" type="text" name="username" placeholder="Username" value="{{ old('username') }}" autofocus>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="mdi mdi-account  symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('username')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100 @error('email') is-invalid @enderror" autocomplete="off" value="{{old('email')}}" type="email" name="email" placeholder="Email">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-email  symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('email')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
										<input class="input100 @error('password') is-invalid @enderror" value="{{old('password')}}" type="password" name="password" placeholder="Password">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-lock  symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('password')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
                                                               <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100 @error('nama') is-invalid @enderror" autocomplete="off" value="{{old('nama')}}" type="text" name="nama" placeholder="Full Name">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="mdi mdi-account-card-details  symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('nama')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100 @error('nim') is-invalid @enderror" autocomplete="off" value="{{old('nim')}}" type="text" name="nim" placeholder="Nim">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa fa-vcard  symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('nim')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
									<div class="wrap-input100 validate-input" data-bs-validate = "Password is required">
                                                                      <select name="prodi" id="prodi" class="input100 form-select" autocomplete="off" value="{{old('prodi')}}">
                                                                             @foreach ($prodi as $prodi)
                                                                                    <option value="{{$prodi->id}}">{{$prodi->prodi}}</option>
                                                                             @endforeach
                                                                      </select>
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="zmdi zmdi-assignment-o  symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('prodi')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
                                                               <div class="wrap-input100 validate-input" data-bs-validate = "Valid email is required: ex@abc.xyz">
										<input class="input100 @error('nohp') is-invalid @enderror" autocomplete="off" value="{{old('nohp')}}" type="text" name="nohp" placeholder="No.Handphone">
										<span class="focus-input100"></span>
										<span class="symbol-input100">
											<i class="fa fa-address-book  symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('nohp')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
									<div class="wrap-input100 validate-input" >
										<input class="input100 @error('alamat') is-invalid @enderror" autocomplete="off" placeholder="Alamat" value="{{ old('alamat') }}" type="text" name="alamat" >
										<span class="focus-input100"></span>
										<span class="symbol-input100">
                                                                      <i class="zmdi zmdi-pin symbol-input100 pt-3" aria-hidden="true"></i>
										</span>
                                                                      @error('alamat')
                                                                      <div class="invalid-feedback">
                                                                             {{$message}}
                                                                      </div>
                                                                      @enderror
									</div>
									
									<div class="container-login100-form-btn">
										<button type="submit" class="login100-form-btn btn-success">
											Register
										</button>
									</div>
									<div class="text-center pt-3">
										<p class="text-dark mb-0">Already have account?<a href="{{ route('login') }}" class="text-teal ms-1">Sign In</a></p>
									</div>
								</form>
							</div>
							
						</div>
					</div>
					<!-- CONTAINER CLOSED -->
				</div>
			</div>
			<!-- END PAGE -->

		</div>
		<!-- BACKGROUND-IMAGE CLOSED -->

		<!-- JQUERY JS -->
		<script src="../assets/js/jquery.min.js"></script>

		<!-- BOOTSTRAP JS -->
		<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
		<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

		<!-- CHART-CIRCLE JS -->
		<script src="../assets/js/circle-progress.min.js"></script>

		<!-- Perfect SCROLLBAR JS-->
		<script src="../assets/plugins/p-scroll/perfect-scrollbar.js"></script>

		<!-- INPUT MASK JS -->
		<script src="../assets/plugins/input-mask/jquery.mask.min.js"></script>

        <!-- Color Theme js -->
        <script src="../assets/js/themeColors.js"></script>

        <!-- CUSTOM JS -->
        <script src="../assets/js/custom.js"></script>

	</body>
</html>
