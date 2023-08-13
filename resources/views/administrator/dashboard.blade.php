@extends('administrator.layouts.main')

@section('content')
<div class="main_content_iner overly_inner ">
    <div class="container-fluid p-0 ">
        <!-- page title  -->
        <div class="row">
            <div class="col-12">
                <div class="page_title_box d-flex align-items-center justify-content-between">
                    <div class="page_title_left">
                        <h3 class="f_s_30 f_w_700 text_white" >Dashboard</h3>
                        <ol class="breadcrumb page_bradcam mb-0">
                            <li class="breadcrumb-item">E-Library</li>
                            <li class="breadcrumb-item">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-4 mb-3">
                <div class="card mb-3 widget-chart" >
                    <div class="widget-numbers">{{ $genre }}</div>
                    <div class="widget-subheading">Data Genre</div>
                </div>
            </div>
            <div class="col-xl-4 mb-3">
                <div class="card mb-3 widget-chart">
                    <div class="widget-numbers">{{ $book }}</div>
                    <div class="widget-subheading">Data Buku</div>
                </div>
            </div>
            <div class="col-xl-4 mb-3">
                <div class="card mb-3 widget-chart">
                    <div class="widget-numbers">{{ $user }}</div>
                    <div class="widget-subheading">Data User</div>
                </div>
            </div>
        </div>

        <div class="row ">
            <div class="col-lg-4">
                <div class="white_card card_height_100 mb_20">
                    <div class="date_picker_wrapper">
                        <div class="default-datepicker">
                            <div class="datepicker-here" data-language='en'></div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-lg-8">
                <div class="white_card card_height_100 mb_20 ">
                    <div class="white_card_header">
                        <div class="box_header m-0">
                            <div class="main-title">
                                <h3 class="m-0">Log Aktivitas</h3>
                            </div>
                        </div>
                    </div>
                    <div class="white_card_body QA_section">
                        <div class="QA_table ">
                            <!-- table-responsive -->
                            <table class="table lms_table_active2 p-0">
                                <thead>
                                    <tr>
                                        <th scope="col">No. </th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Aktivitas</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($log as $item)
                                    <tr>
                                        <td class="f_s_14 f_w_400 color_text_activity">{{ $loop->iteration}}</td>
                                        <td class="f_s_14 f_w_400 color_text_activity">{{ $item->name }}</td>
                                        <td class="f_s_14 f_w_400 color_text_activity">{{ $item->date }}</td>
                                        <td class="f_s_14 f_w_400 color_text_activity">{{ $item->activity }}</td>
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
@endsection
