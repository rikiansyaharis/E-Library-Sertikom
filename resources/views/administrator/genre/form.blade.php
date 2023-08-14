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
                            <li class="breadcrumb-item">User</li>
                            <li class="breadcrumb-item active">Tambah User</li>
                        </ol>
                    </div>

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
                                <div class="form-group">
                                    <label for="name" style="font-weight: bold;">Nama Genre</label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" aria-describedby="emailHelp" autocomplete="off" value="{{ isset($data) ? $data->name : '' }}">
                                    <small id="emailHelp" class="form-text text-muted">Masukan jenis brand yang sesuai! </small>
                                    @error('name')
                                    <div class="invalid-feedback">
                                        <span class="text-danger"> {{ $message }}</span>
                                    </div>
                                    @enderror
                                </div>
                                <a href="{{ route('admin.genres')}}"class="btn btn-dark">Cancel</a>
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
