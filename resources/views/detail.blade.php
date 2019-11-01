<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
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
			<link rel="stylesheet" href="/book/css/owl.carousel.css">
			<link rel="stylesheet" href="/book/css/font-awesome.min.css">
			<link rel="stylesheet" href="/book/css/nice-select.css">			
			<link rel="stylesheet" href="/book/css/magnific-popup.css">
			<link rel="stylesheet" href="/book/css/bootstrap.css">
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
		  </header><!-- #header -->			
			<section class="generic-banner relative">	
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">Detail Buku</h2>
								<p class="text-white">Menampilkan Semua Data Buku</p>
							</div>							
						</div>
					</div>
				</div>
			</section>		
            <!-- End banner Area -->
        <!-- About Generic Start -->
		<div class="main-wrapper">
			<!-- Start testomial Area -->
			<section class="testomial-area pt-100">
				<div class="container">
					<div class="row">
					<h3 class="mb-30">{{$buku->buku_judul}} <span class="badge badge-pill badge-info">{{$buku->kategori->kategori_nama}}</span></h3>
					<div class="row">
						<div class="col-md-3">
						<img src="{{ asset('assets/img/buku/'.$buku->buku_foto) }}" alt="" height="80%" width="100%">
						<hr>
						<p><b>Pengarang : {{$buku->buku_pengarang}}</b></p>
						<p><b>Pengarang : {{$buku->penerbit->penerbit_nama}}</b></p>
						</div>
						<div class="col-md-9 mt-sm-20">
							<p>{!! ($buku->buku_deskripsi) !!}</p>
							<hr>
							<div class="button-group-area mt-20">
								<a href="{{ route('login') }}" class="genric-btn primary circle arrow">Borrow
								<span class="lnr lnr-arrow-right"></span></a>
							</div>
						</div>
					</div>
				</div>	
			</section>
			<!-- End testomial Area -->
			<!-- Start Generic Area -->
			<section class="about-generic-area section-gap">
				<!-- <div class="container border-top-generic">
					<h3 class="about-title mb-30">Elaboration about Generic Page</h3>
					<div class="row">
						<div class="col-md-12">
							<div class="img-text">
								<img src="/book/img/a.jpg" alt="" class="img-fluid float-left mr-20 mb-20">
								<p>Recently, the US Federal government banned online casinos from operating in America by making it illegal to transfer money to them through any US bank or payment system. As a result of this law, most of the popular online casino networks such as Party Gaming and PlayTech left the United States. Overnight, online casino players found themselves being chased by the Federal government. But, after a fortnight, the online casino industry came up with a solution and new online casinos started taking root. These began to operate under a different business umbrella, and by doing that, rendered the transfer of money to and from them legal. A major part of this was enlisting electronic banking systems that would accept this new clarification and start doing business with me. Listed in this article are the electronic banking systems that accept players from the United States that wish to play in online casinos.</p>
							</div>
						</div>
					</div>  
				</div> -->
            </section>
			<!-- End Generic Start -->		

			<!-- start footer Area -->		
			<!-- End footer Area -->	
			
			<script src="/book/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="/book/https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="/book/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="/book/https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
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
