
<!DOCTYPE html>
<html class="no-js">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>E-Library</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<link href="https://fonts.googleapis.com/css?family=Bungee+Shade" rel="stylesheet">
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
	<!-- Modernizr JS -->
	<script src="{{ asset('assets/js/modernizr-2.6.2.min.js')}}"></script>

</head>
<body>

	<header id="fh5co-header" style="background-image: url('assets/images/background.jpg')">
		<div class="overlay"></div>
		<div class="container">
			<div class="row" style="margin-top: 2em;">
				<div class="col-md-12 text-center">
					<h1 id="fh5co-logo" class="cursive-font"><a href="index.html">E-Library</a></h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="intro">

						<h2>Sebuah website perpustakaan yang menyediakan beberapa buku untuk dibaca secara online</h2>
						<p>
							<a href="{{ route('auth')}}" class="btn btn-primary btn-lg btn-hardbound">Masuk E-Library </a>
						</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<figure class="fh5co-intro-img">
						<img class="img-1 animate-box" src="{{ asset('assets/images/book_black.png') }}"\>
						<img class="img-2 animate-box" src="{{ asset('assets/images/book_white.png') }}"\>
					</figure>
				</div>
			</div>
		</div>
	</header>

	<div id="main">

		<div class="container">
			<div class="row fh5co-feature">
				<div class="col-md-6 col-md-push-6">
					<div class="fh5co-copy">
						<div class="fh5co-copy-inner">
							<h2>Keep It Simple</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="fh5co-img text-right">
						<figure class="fh5co-figure animate-box">
							<img class="img-2" src="{{ asset('assets/images/book_white.png') }}" alt="Free Website Template by FreeHTML5.co">
						</figure>
					</div>
				</div>
			</div>
			<!-- END feature -->

			<div class="row fh5co-feature fh5co-reverse">
				<div class="col-md-6">
					<div class="fh5co-copy">
						<div class="fh5co-copy-inner">
							<h2>Pixel Perfect</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="fh5co-img text-left">
						<figure class="fh5co-figure animate-box">
							<img class="img-2" src="{{ asset('assets/images/book_black.png') }}" alt="Free Website Template by FreeHTML5.co">
						</figure>
					</div>
				</div>
			</div>
			<!-- END feature -->

			<div class="row fh5co-feature last-feature">
				<div class="col-md-6 col-md-push-6">
					<div class="fh5co-copy">
						<div class="fh5co-copy-inner">
							<h2>Beautiful Design</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="fh5co-img text-right">
						<figure class="fh5co-figure animate-box">
							<img class="img-2" src="{{ asset('assets/images/book_white.png') }}" alt="Free Website Template by FreeHTML5.co">
						</figure>
					</div>
				</div>
			</div>
			<!-- END feature -->


		</div>


		<div class="fh5co-testimonial">
			<div class="container">
				<div class="row text-center fh5co-heading">
					<h2>More Customer Review</h2>
				</div>
				<div class="owl-carousel owl-carousel-fullwidth">
					<div class="item">
						<div class="testimony-slide active text-center">
							<figure>
								<img src="{{ asset('assets/images/person_1.jpg') }}" alt="user">
							</figure>
							<span>Jean Doe </span>
							<span class="review">
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star"></i>
							</span>
							<blockquote>
								<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center">
							<figure>
								<img src="{{ asset('assets/images/person_2.jpg') }}" alt="user">
							</figure>
							<span>John Doe </span>
							<span class="review">
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
							</span>
							<blockquote>
								<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>
					</div>
					<div class="item">
						<div class="testimony-slide active text-center">
							<figure>
								<img src="{{ asset('assets/images/person_3.jpg') }}" alt="user">
							</figure>
							<span>Rob Smith </span>
							<span class="review">
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
								<i class="icon-star colored"></i>
							</span>
							<blockquote>
								<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
							</blockquote>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="features">
			<div class="container">
				<div class="row text-center fh5co-heading">
					<div class="col-md-8 col-md-offset-2">
						<h2>More Features</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-tablet"></i>
							</span>
							<h3>iBook</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						</div>
					</div>
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-heart"></i>
							</span>
							<h3>Love by everyone</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						</div>
					</div>
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-star"></i>
							</span>
							<h3>Good Review</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						</div>
					</div>
					<div class="col-md-3 animate-box">
						<div class="feature-center">
							<span class="icon">
								<i class="icon-cog"></i>
							</span>
							<h3>Mob</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<footer id="footer">
			<div class="container">
				<div class="col-md-12 text-center">
					<p class="copyright">
						<small>&copy; 2020 - E-Library.</small>

					</p>
					<ul class="fh5co-social">

						<li><a href="#"><i class="icon-facebook"></i></a></li>
						<li><a href="#"><i class="icon-twitter"></i></a></li>
						<li><a href="#"><i class="icon-linkedin"></i></a></li>
						<li><a href="#"><i class="icon-apple"></i></a></li>
					</ul>
				</div>
			</div>
		</footer>
	</div>

	<!-- jQuery -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
	<!-- Carousel -->
	<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>

	<!-- MAIN JS -->
	<script src="{{ asset('assets/js/main.js') }}"></script>

	</body>
</html>

