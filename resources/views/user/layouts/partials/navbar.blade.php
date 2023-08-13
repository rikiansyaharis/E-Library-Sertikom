	<!-- Header -->
	<header class="header shop">
		<!-- Topbar -->
		<div class="topbar">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-12">
						<!-- Top Left -->
						<div class="top-left">
							<ul class="list-main">
								<li><i class="ti-headphone-alt"></i> +123456789</li>
								<li><i class="ti-email"></i> e-library@gmail.com</li>
							</ul>
						</div>
						<!--/ End Top Left -->
					</div>
					<div class="col-lg-8 col-md-12 col-12">
						<!-- Top Right -->
						<div class="right-content">
							<ul class="list-main">
								<li><i class="ti-location-pin"></i> Banyuwangi</li>
								<li><i class="ti-user"></i> <a href="#">{{ auth()->user()->name}}</a></li>
								<li><i class="ti-power-off"></i><a href="{{ route('auth.logout')}}">Log Out</a></li>
							</ul>
						</div>
						<!-- End Top Right -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Topbar -->
        <div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
							<a href="index.html"><img src="{{ asset('administrator/assets/img/icon.png')}}" alt="logo"></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								<select>
									<option selected="selected">Cari Buku</option>
								</select>
								<form action="{{ route('user.books')}}" method="GET" enctype="">
									<input name="search" placeholder="Masukan Nama Buku..." value="{{ isset($search) ? $search : '' }}" type="search">
									<button class="btnn" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
                            {{-- <div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div> --}}
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header Inner -->
		<div class="header-inner">
			<div class="container">
				<div class="cat-nav-head">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="menu-area">
								<!-- Main Menu -->
								<nav class="navbar navbar-expand-lg">
									<div class="navbar-collapse">
										<div class="nav-inner">
											<ul class="nav main-menu menu navbar-nav">
                                                <li class="{{ (request()->is('pages/home*')) ? 'active' : '' }}"><a href="{{ route('user.home')}}">Home</a></li>
                                                <li class="{{ (request()->is('pages/books*')) ? 'active' : '' }}"><a href="{{ route('user.books')}}">Buku</a></li>
                                                <li><a >Kategori<i class="ti-angle-down"></i></a>
                                                    <ul class="dropdown">
                                                        @foreach (getGenre() as $genre)
                                                        <li><a href="{{ route('user.getGenres', $genre->name )}}">{{ $genre->name}}</a></li>
                                                        @endforeach
                                                    </ul>
                                                </li>
                                            </ul>
										</div>
									</div>
								</nav>
								<!--/ End Main Menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Header Inner -->
	</header>
	<!--/ End Header -->
