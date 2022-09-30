<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Meta Tags -->
    <title>@yield('title')</title>
    <meta name="description" content="@yield('meta_description')">
    <meta name="keywords" content="@yield('meta_keyword')">

    <meta name="author" content="Shahrukh Mirza">

    @php
        $setting = App\Models\Setting::find(1);
    @endphp
    
    @if($setting)
    <link rel="shortcut icon" href="{{ asset('uploads/settings/'.$setting->favicon) }}" type="image/x-icon">
    @endif

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('assets/css/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet">
    
    <link href="{{ asset('assets/mental/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/animation.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/bootstrap,min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/magnifisic-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/responsiveslides.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/span-style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/mental/css/timeline.css') }}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link href="{{ asset('assets/css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/owl.theme.default.min.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
      
        @include('layouts.inc.frontend-navbar')
        
        <main class="">
            <div class="ulockd-home-slider">
                @yield('content')
            </div>
        </main>

        @include('layouts.inc.frontend-footer')
        
    </div>

<!-- Scripts -->
<script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Mental Scripts -->
<script src="{{ asset('assets/mental/js/custom.js') }}"></script>
<script src="{{ asset('assets/mental/js/form-validator.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/images-loded.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/isotope.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/jquery.pogo-slider.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/slider-index.js') }}"></script>
<script src="{{ asset('assets/mental/js/smoothscroll.js') }}"></script>
<script src="{{ asset('assets/mental/js/contact-form-script.js') }}"></script>
<script src="{{ asset('assets/mental/js/shuffle.js') }}"></script>
<!-- Mental JS Scripts -->
<script src="{{ asset('assets/mental/js/js/jquery-1.11.0.min.js') }}"></script>
<script src="{{ asset('assets/mental/js/js/jquery-scrolltofixed.js') }}"></script>
<script src="{{ asset('assets/mental/js/js/jquery.nav.js') }}"></script> 
<script src="{{ asset('assets/mental/js/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('assets/mental/js/js/jquery.isotope.js') }}"></script>
<script src="{{ asset('assets/mental/js/js/wow.js') }}"></script> 
<script src="{{ asset('assets/mental/js/js/custom.js') }}"></script>
<script src="{{ asset('assets/mental/js/js/fancybox/jquery.fancybox.pack.js') }}"></script> 
<script src="https://unpkg.com/shufflejs@5"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>

<!-- Side Menu Scripts -->
<script>
	$(document).ready(function () {
		$('#sidebarCollapse, #sidebar-collapse-inner').on('click', function () {
			if ($('.ulockd-home-slider').css('opacity') == '0') {
				$('.ulockd-home-slider').animate({ opacity: 1 });
			}
			else {
				$('#sidebar').height($('.ulockd-home-slider').height());
				$('#sidebar').width($('.ulockd-home-slider').width());
				// $('.ulockd-home-slider').css('visibility', 'visible');
				$('.ulockd-home-slider').animate({ opacity: 0 });
			}
			$('#sidebar, #content').toggleClass('active');
			$('.collapse.in').toggleClass('in');
			$('a[aria-expanded=true]').attr('aria-expanded', 'false');
		});
	});
</script>

<!-- Owl Carousel Scripts -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script>
        $('.category-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots: false,
        responsive:{
            0:{
                items:2
            },
            600:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })
    </script>
    
@yield('scripts')

</body>
</html>
