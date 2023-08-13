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
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}">E-Library</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.book')}}">Buku</a></li>
                            <li class="breadcrumb-item active">Tambah Buku</li>
                        </ol>
                    </div>
                    {{-- <a href="{{ route('admin.books.create') }}" class="white_btn3">Tambah Buku</a> --}}
                </div>
            </div>
        </div>


        @if (Session::has('success'))
            <div class="alert text-white bg-info d-flex align-items-center justify-content-between" id="alert" role="alert">
                <div class="alert-text">{{Session::get('success')}}</div>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <i class="ti-close text-white f_s_14"></i>
                </button>
             </div>
        @endif

        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        {{-- Content Wrapper --}}

                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h3 class="m-0">Pastikan Data Yang anda masukan benar!</h3>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <form action="{{ $action }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Judul Buku <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" aria-describedby="emailHelp" placeholder="Masukan Judul Buku" value="{{ isset($data) ? $data->name : '' }}">
                                            @error('name')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="name">Penulis <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control @error('author') is-invalid @enderror" id="name" name="author" aria-describedby="emailHelp" placeholder="Masukan Penulis Buku" value="{{ isset($data) ? $data->author : '' }}">
                                            @error('author')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Tahun Terbit <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control @error('publication_years') is-invalid @enderror" id="name" name="publication_years" aria-describedby="emailHelp" placeholder="Masukan Tahun Terbit Buku" value="{{ isset($data) ? $data->publication_years : '' }}">
                                            @error('publication_years')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Jumlah Halaman <span class="text-danger">*</span> </label>
                                            <input type="text" class="form-control @error('number_of_pages') is-invalid @enderror" id="name" name="number_of_pages" aria-describedby="emailHelp" placeholder="Masukan Jumlah Halaman Buku" value="{{ isset($data) ? $data->number_of_pages : '' }}">
                                            @error('number_of_pages')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="name">Jenis Brand <span class="text-danger">*</span> </label>
                                            <select id="inputState" class="form-control  @error('genre_id') is-invalid @enderror" id="name" name="genre_id" >
                                                <option selected="">Pilih Genre Buku</option>
                                                @foreach ($genres as $item)
                                                    <option value="{{ $item->id }}" {{isset($data) && $data->genre_id == $item->id ? 'selected' : ''}}> {{$item->name}} </option>
                                                @endforeach
                                            </select>
                                            @error('genre_id')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label for="name">Image<span class="text-danger">*</span> </label>
                                    <input type="file" class="dropify @error('image') is-invalid @enderror" id="dropify" data-allowed-file-extensions="jpg jpeg png"   name="file_image">
                                    @error('image')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <div class="mb-3">
                                        <label for="file" class="form-label">File</label>
                                        <input class="dropify @error('file') is-invalid @enderror" type="file" name="file_book" id="dropify"  data-allowed-file-extensions="pdf doc" data-height="100">
                                      </div>
                                    @error('file')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="name">Deskripsi</label>
                                    <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="editor" name="description" aria-describedby="emailHelp">{{ isset($data) ? $data->description : '' }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>

                                <a href="{{ route('admin.book')}}"class="btn btn-dark">Cancel</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>

                        {{-- End Content Wrapper --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

@endsection
