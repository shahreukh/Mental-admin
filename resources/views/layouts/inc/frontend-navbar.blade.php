<!-- FRONTEND NAVBAR -->

<!-- MAIN BODY -->
<body id="home" data-spy="scroll" data-target="#navbar-wd" data-offset="98">

    <!-- LOADER -->
    <div id="preloader">
        <div class="loader">
            <img src="{{ asset('assets/mental/images/loader.gif') }}" alt="Loading..." />
        </div>
    </div>
    <!-- END LOADER -->

    <div class="wrapper">
        <nav id="sidebar">
            <div class="menu_section">
                <div class="logo_main header-logo menu-logo">
                    <a href="/">
                        @php
                            $setting = App\Models\Setting::find(1);
                        @endphp
                        
                        @if($setting)
                            <img src="{{ asset('uploads/settings/'.$setting->logo) }}"  alt="logo" />
                        @endif
                    </a>
                </div>

                <ul>
                    <button type="button" id="sidebar-collapse-inner" class="btn btn-info navbar-btn">
                        <img src="{{ asset('assets/mental/images/icon-close.png') }}">
                    </button>
                    <li><a href="/"><b>işler</b></a></li>
                    <li><a href="/mentalite"><b>mantalite</b></a></li>
                    <li><a href="/career">kariyer</a></li>
                    <li><a href="/service">hizmetler</a></li>
                    <li><a href="/reference">referanslar</a></li>
                    <li><a href="/contact">iletişim</a></li>
                </ul>
                     <img class="d-block menu-slogan" src="{{ asset('assets/mental/images/slogan.png') }}" alt="Mental Creative Slogan">
                </div>
            </nav>

            <div id="app">
            <!-- Start header 1 -->
            <header id="hd1" class="top-header">
                <div class="header-container">
                    <div class="row">
                        <div class="col-sm-5">
                            <div class="logo_main header-logo">
								<a href="/">
								@php
                    				$setting = App\Models\Setting::find(1);
                				@endphp
                				@if($setting)
                					<img src="{{ asset('uploads/settings/'.$setting->logo) }}"  alt="logo" />
                				@endif
								</a>
							</div>
						</div>
						<div class="col-sm-7">
							<button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
								<img src="{{ asset('assets/mental/images/menu_icon.png') }}">
							</button>
						</div>
					</div>
				</div>
			</header>
			
			<!-- Start header 2 -->
			<header id="hd2" class="top-header" style="background-color: rgb(248, 249, 250);">
				<div class="header-container">
					<div class="row">
						<div class="col-sm-4">
							<div class="logo_main header-logo">
								<a href="/">
								@php
                    				$setting = App\Models\Setting::find(1);
                				@endphp
                				@if($setting)
                					<img src="{{ asset('uploads/settings/'.$setting->logo) }}"  alt="logo" />
                				@endif
								</a>
							</div>
						</div>
						<div class="col-sm-8">
							<ul id="nav" class="nav navbar-nav navbar-right" style="width: none!important;">
								<li><a href="/"><b>İŞLER</b></a></li>
								<li><a href="/mentalite"><b>MANTALİTE</b></a></li>
								<li><a href="/career">KARİYER</a></li>
								<li><a href="/service">HİZMETLER</a></li>
								<li><a href="/reference">REFERANSLAR</a></li>
								<li><a href="/contact">İLETİŞİM</a></li>
							</ul>
						</div>
					</div>
				</div>
			</header>
</div>
<!-- Menu Navbar -->
<script>
	window.onscroll = function() {
	  var currentScrollPos = window.pageYOffset;
	  if (prevScrollpos > currentScrollPos) {
		document.getElementById("hd1").style.top = "0";
	  } else {
		document.getElementById("hd1").style.top = "-250px";
	  }
	  prevScrollpos = currentScrollPos;
	}
</script>

<!-- Navbar -->
<script>
	// When the user scrolls down 200px from the top of the document, slide down the navbar
	window.onscroll = function() {scrollFunction()};
	function scrollFunction() {
	  if (document.body.scrollTop > 200|| document.documentElement.scrollTop > 200) {
		document.getElementById("hd2").style.top = "0";
	  } else {
		document.getElementById("hd2").style.top = "-250px";
	  }
	}
</script>
