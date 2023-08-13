@extends('user.layouts.app')


@section('main-content')

	<!-- Slider Area -->
	<section class="hero-slider"  style="background-image: url('../images/background.jpg')">
		<!-- Single Slider -->
		<div class="single-slider">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-lg-9 offset-lg-3 col-12">
						<div class="text-inner">
							<div class="row">
								<div class="col-lg-7 col-12">
									<div class="hero-text">
										<h1><span>Website </span>E-Library</h1>
										<p> merupakan perpustakaan digital yang menyediakan berbagai jenis kategori buku, mulai dari buku umum, buku ilmu pengetahuan, ensiklopedia, artikel, makalah, dan novel dengan berbagai genre seperti Action, Comedy, Horor, Romance, Fiksi, dan Thriller.</p>
										<div class="button">
											{{-- <a href="#" class="btn">Shop Now!</a> --}}
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/ End Single Slider -->
	</section>
	<!--/ End Slider Area -->

	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Baru Di Tambahkan</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
                                            @foreach ($data as $book)
											<div class="col-xl-3 col-lg-4 col-md-4 col-sm-6 col-12">
                                                <div class="single-product">
                                                    <div class="product-img">
                                                        <a href="product-details.html">
                                                            <img class="default-img" src="{{ asset('storage/images/book/'. $book->image ) }}" alt="#">
															<img class="hover-img" src="{{ asset('storage/images/book/'. $book->image ) }}" alt="#">
														</a>
														<div class="button-head">
                                                            <div class="product-action">
                                                                <a data-toggle="modal" data-target="#exampleModal" title="Quick View"><i class=" ti-eye"></i> {{ $book->count_views}}</a>
                                                            </div>
															<div class="product-action-2">
																<a title="Add to cart" href="{{ asset('storage/file/book/'. $book->file )}}" target="_blank">Baca Sekarang</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h5><a href="{{ route('user.details', $book->id )}}">{{ $book->name }}</a></h5>
														<div class="product-price">
															<span>{{ $book->author }}</span>
														</div>
													</div>
												</div>
											</div>
                                            @endforeach



										</div>
									</div>
								</div>
								<!--/ End Single Tab -->

							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Product Area -->

	<!-- Start Most Popular -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Koleksi</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @foreach ($collection as $item)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="{{ asset('storage/images/book/'. $item->image ) }}" alt="#">
									<img class="hover-img" src="{{ asset('storage/images/book/'. $item->image ) }}" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View"><i class=" ti-eye"></i> {{ $item->count_views}}</a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="{{ asset('storage/file/book/'. $item->file )}}" target="_blank">Baca Sekarang</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h5><a href="product-details.html">{{ $item->name }}</a></h5>
								<div class="product-price">
									<span>{{ $item->author }}</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->

	<!-- Start  Romance -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Romance</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
                        @foreach ($collection as $item)
						<!-- Start Single Product -->
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="{{ asset('storage/images/book/'. $item->image ) }}" alt="#">
									<img class="hover-img" src="{{ asset('storage/images/book/'. $item->image ) }}" alt="#">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View"><i class=" ti-eye"></i> {{ $item->count_views}}</a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="{{ asset('storage/file/book/'. $item->file )}}" target="_blank">Baca Sekarang</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h5><a href="product-details.html">{{ $item->name }}</a></h5>
								<div class="product-price">
									<span>{{ $item->author }}</span>
								</div>
							</div>
						</div>
						<!-- End Single Product -->
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
	<!-- End Romance -->

	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->

@endsection





