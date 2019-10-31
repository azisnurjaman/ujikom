
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="/book/img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Book</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="/book/css/linearicons.css">
			<link rel="stylesheet" href="/book/css/font-awesome.min.css">
			<link rel="stylesheet" href="/book/css/bootstrap.css">
			<link rel="stylesheet" href="/book/css/magnific-popup.css">
			<link rel="stylesheet" href="/book/css/nice-select.css">					
			<link rel="stylesheet" href="/book/css/animate.min.css">
			<link rel="stylesheet" href="/book/css/owl.carousel.css">
			<link rel="stylesheet" href="/book/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="/"><img src="/book/img/logo.png" alt="" title="" /></a>
				      </div>
			    	</div>
			    </div>
			  </header>


			<!-- start banner Area -->
			<section class="banner-area" id="home">	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-start">
						<div class="banner-content col-lg-7">
							<h1 class="text-uppercase">
                borrowing books
              </h1>
              <p class="text-white pt-20 pb-20">
								Selamat datang di website peminjaman buku
							</p>
              @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}" class="primary-btn text-uppercase">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="primary-btn text-uppercase">Login</a>
										@if (Route::has('register'))
												<a href="{{ route('register') }}" class="primary-btn text-uppercase">Register</a>
										@endif
                    @endauth
								</div>
							@endif
						</div>
						<div class="col-lg-5 banner-right">
							<img class="img-fluid" src="/book/img/header-img.png" alt="">
						</div>												
					</div>
				</div>
			</section>
			<section class="course-area section-gap" id="course">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-60 col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10">Our Books</h1>
								<p>Just For Borrow</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="active-course-carusel">
							@yield('content')
						</div>
					</div>																		
				</div>
			</section>
			<!-- End banner Area -->			

			<script src="/book/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="/book/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="/book/js/easing.min.js"></script>			
			<script src="/book/js/hoverIntent.js"></script>
			<script src="/book/js/superfish.min.js"></script>	
			<script src="/book/js/jquery.ajaxchimp.min.js"></script>
			<script src="/book/js/jquery.magnific-popup.min.js"></script>	
			<script src="/book/js/owl.carousel.min.js"></script>			
			<script src="/book/js/jquery.sticky.js"></script>
			<script src="/book/js/jquery.nice-select.min.js"></script>			
			<script src="/book/js/parallax.min.js"></script>	
			<script src="/book/js/waypoints.min.js"></script>
			<script src="/book/js/jquery.counterup.min.js"></script>			
			<script src="/book/js/mail-script.js"></script>	
			<script src="/book/js/main.js"></script>	
		</body>
	</html>



