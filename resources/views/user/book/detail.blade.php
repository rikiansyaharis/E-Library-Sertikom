@extends('user.layouts.app')


@section('main-content')


<div class="container mt-5 mb-5">
    <div class="card border-0">
        <div class="card-body">
            <h2 class="card-title" >{{ $data->name }}</h2>
            <h5 class="card-subtitle" >{{ $data->author}}</h5>
            <div class="row">
                <div class="col-lg-5 col-md-5 col-sm-6">
                    <div class="white-box text-center"><img src="{{ asset('storage/images/book/'.  $data->image )}}" width="300px" class="mt-5 img-responsive"></div>
                </div>
                <div class="col-lg-7 col-md-7 col-sm-6">
                    <h4 class="box-title mt-5"> Deskripsi</h4>
                    {{-- <p>{{ $data->description }}</p> --}}
                    <p>{!!html_entity_decode($data->description)!!}</p>
                    <hr>
                    <p> <span>Tahun Terbit : {{ $data->publication_years }} </span> </p>
                    <p> <span>Genre : {{ $data->genre->name }} </span> </p>
                    <p><span>Jumlah Halaman : {{ $data->number_of_pages }} </span> </p>
                    <p><span>Dilihat Sebanyak : {{ $data->count_views }} </span> </p>
                    <a href="{{ asset('storage/file/book/'. $data->file ) }}" class="btn btn-warning mt-3" id="btn-show" target="_blank">Lihat Buku</a>
                </div>
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
                                {{-- @foreach ($data as $book)
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
                                @endforeach --}}



                            </div>
                        </div>
                    </div>
                    <!--/ End Single Tab -->

                </div>
            </div>
        </div>
    </div>
</div>


@endsection





