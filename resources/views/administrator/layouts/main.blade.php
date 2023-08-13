@extends('administrator.layouts.app')

@section('main')

    @include('administrator.layouts.partials.sidebar')

<section class="main_content dashboard_part large_header_bg">

    @include('administrator.layouts.partials.navbar')

    @yield('content')

   <!-- footer part -->
   <div class="footer_part">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="footer_iner text-center">
                        <p>2023 © E-LIbrary </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
