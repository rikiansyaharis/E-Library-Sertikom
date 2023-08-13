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
                            {{-- <li class="breadcrumb-item active">Sales</li> --}}
                        </ol>
                    </div>
                    <a href="{{ route('admin.users.create')}}" class="white_btn3">Tambah User</a>
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

        {{-- Content Wrapper --}}

        <div class="container-fluid p-0">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="white_card card_height_100 mb_30">
                        <div class="white_card_header">
                            <div class="box_header m-0">
                                <div class="main-title">
                                    <h4 class="m-0">Tabel User</h4>
                                    <hr>
                                </div>
                            </div>
                        </div>
                        <div class="white_card_body">
                            <div class="QA_section">
                                <div class="white_box_tittle list_header">

                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                            <div class="search_inner">
                                                <form Active="#">
                                                    <div class="search_field">
                                                        <input type="text"  placeholder="Search content here...">
                                                    </div>
                                                    <button type="submit"> <i class="ti-search"></i> </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="QA_table mb_30">
                                    <!-- table-responsive -->
                                    <table class="table  lms_table_active">
                                        <thead>
                                            <tr>
                                                <th scope="col">No.</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Role</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @foreach ($data as $item)
                                            <tr>
                                                <th scope="row"> {{ $loop->iteration }} </th>
                                                <th scope="row"> {{ $item->name }} </th>
                                                <th scope="row"> {{ $item->role->name }} </th>
                                                <th scope="row"> {{ $item->email }} </th>
                                                <td>
                                                    <a href="{{ route('admin.users.edit', $item->id )}}" class="btn btn-outline-info "><i class="fas fa-edit"></i></a>
                                                    <a href="{{ route('admin.users.delete', $item->id )}}" onclick="return confirm('Apa anda ingin menghapus akun ini?');" class="btn btn-outline-danger"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- End Content Wrapper --}}

    </div>
</div>



@endsection
