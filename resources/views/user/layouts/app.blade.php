@extends('user.layouts.base')

@section('app')

	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->

    @include('user.layouts.partials.navbar')

    @yield('main-content')


    @include('user.layouts.partials.footer')


<!-- Jquery -->
<script src="{{ asset('user/js/jquery.min.js') }}"></script>
<script src="{{ asset('user/js/jquery-migrate-3.0.0.js') }}"></script>
<script src="{{ asset('user/js/jquery-ui.min.js') }}"></script>
<!-- Popper JS -->
<script src="{{ asset('user/js/popper.min.js') }}"></script>
<!-- Bootstrap JS -->
<script src="{{ asset('user/js/bootstrap.min.js') }}"></script>
<!-- Color JS -->
<script src="{{ asset('user/js/colors.js') }}"></script>
<!-- Slicknav JS -->
<script src="{{ asset('user/js/slicknav.min.js') }}"></script>
<!-- Owl Carousel JS -->
<script src="{{ asset('user/js/owl-carousel.js') }}"></script>
<!-- Magnific Popup JS -->
<script src="{{ asset('user/js/magnific-popup.js') }}"></script>
<!-- Waypoints JS -->
<script src="{{ asset('user/js/waypoints.min.js') }}"></script>
<!-- Countdown JS -->
<script src="{{ asset('user/js/finalcountdown.min.js') }}"></script>
<!-- Nice Select JS -->
<script src="{{ asset('user/js/nicesellect.js') }}"></script>
<!-- Flex Slider JS -->
<script src="{{ asset('user/js/flex-slider.js') }}"></script>
<!-- ScrollUp JS -->
<script src="{{ asset('user/js/scrollup.js') }}"></script>
<!-- Onepage Nav JS -->
<script src="{{ asset('user/js/onepage-nav.min.js') }}"></script>
<!-- Easing JS -->
<script src="{{ asset('user/js/easing.js') }}"></script>
<!-- Active JS -->
<script src="{{ asset('user/js/active.js') }}"></script>

@endsection
