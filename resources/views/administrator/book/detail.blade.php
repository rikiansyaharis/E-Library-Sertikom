@extends('administrator.layouts.main')


@section('content')

<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_30 f_w_700 text_white" >{{ $title }}</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item">E-Library</li>
                            <li class="breadcrumb-item">Buku</li>
                            {{-- <li class="breadcrumb-item active">Sales</li> --}}
                        </ol>
                    </div>
                    <a href="{{ route('admin.books.create')}}" class="white_btn3">Tambah Buku</a>
                </div>
            </div>
        </div>


        {{-- Content Wrapper --}}

        <div class="container">
            <div class="card">
                <div class="card-body">
                    <h2 class="card-title" >{{ $data->name }}</h2>
                    <h5 class="card-subtitle" >{{ $data->author}}</h5>
                    <div class="row">
                        <div class="col-lg-5 col-md-5 col-sm-6">
                            <div class="white-box text-center"><img src="{{ asset('storage/images/book/'.  $data->image )}}" width="300px" class="mt-5 img-responsive"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6">
                            <h4 class="box-title mt-5"> Deskripsi</h4>
                            <p>{{ $data->description }}</p>
                            <hr>
                            <p> <span>Tahun Terbit : {{ $data->publication_years }} </span> </p>
                            <p> <span>Genre {{ $data->genre->name }} </span> </p>
                            <p><span>Jumlah Halaman {{ $data->number_of_pages }} </span> </p>
                            <a href="{{ asset('storage/file/book/'. $data->file ) }}" class="btn btn-primary mt-2" target="_blank">Lihat Buku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- End Content Wrapper --}}

    </div>
</div>


@endsection
