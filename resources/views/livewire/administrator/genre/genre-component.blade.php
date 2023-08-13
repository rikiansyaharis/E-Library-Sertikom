<div>
    {{-- Stop trying to control. --}}
    @include('livewire.administrator.genre.include.modal')
    @include('administrator.alert.alert')

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
                                <li class="breadcrumb-item">Genre</li>
                                {{-- <li class="breadcrumb-item active">Sales</li> --}}
                            </ol>
                        </div>
                        {{-- <button class="white_btn3" data-toggle="modal" data-target="#exampleModalCenter">Tambah Genre</button> --}}
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
                    <div class="col-lg-7">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h4 class="m-0">Tabel Genre</h4>
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
                                                            <input type="text" wire:model.live.debounce.200ms='search' placeholder="Search content here...">
                                                        </div>
                                                        <button type="submit"> <i class="ti-search"></i> </button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="QA_table mb_30">
                                        <!-- table-responsive -->
                                        <table class="table  ">
                                            <thead>
                                                <tr>
                                                    <th scope="col">No.</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Opsi</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @foreach ($data as $item)
                                                <tr>
                                                    <th scope="row"> {{ $loop->iteration }} </th>
                                                    <td>{{ $item->name }}</td>
                                                    <td>
                                                        <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $item->id }})" class="btn btn-outline-info btn-rounded"><i class="fas fa-edit"></i></button>
                                                        <button  class="btn btn-outline-danger"  wire:click="delete({{ $item->id }})"><i class="fas fa-trash"></i></button>
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

                    <div class="col-lg-5">
                        <div class="white_card  mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h4 class="m-0">Form Genre</h4>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                            <div class="white_card_body">
                                <form>
                                    <div class="form-group">
                                        <label for="name" style="font-weight: bold;">Nama Genre</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" wire:model='name' id="name" aria-describedby="emailHelp" autocomplete="off">
                                        <small id="emailHelp" class="form-text text-muted">Masukan jenis brand yang sesuai! </small>
                                        @error('name')
                                        <div class="invalid-feedback">
                                            <span class="text-danger"> {{ $message }}</span>
                                        </div>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn btn-info" wire:click.prevent='create'>Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- End Content Wrapper --}}

        </div>
    </div>

</div>
