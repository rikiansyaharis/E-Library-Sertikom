@extends('user.layouts.app')


@section('main-content')


	<!-- Start Product Area -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Semua Buku</h2>
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


@endsection





