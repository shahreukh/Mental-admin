<!-- HOME PAGE -->

@extends ('layouts.app')

@section('title', "$setting->meta_title")

@section('meta_description', "$setting->meta_description")

@section('meta_keyword', "$setting->meta_keyword")

@section('content')

<!-- Start Banner -->
<div class="row">
    <div id="mental-carousel" class="carousel slide" data-ride="carousel">
        <div class="" role="listbox">
            <div class="carousel-item active" style="background-color: white;">
                <video  preload="auto" autoplay=""  muted="" playsinline="" data-object-fit="cover" style="width: 100%!important">
                    <source src="{{ asset('assets/mental/images/carousel/videos/anabanner.mp4') }}" type="video/mp4">
                </video>
                <hr style="padding: 0!important; margin:0!important;  border: 1px solid #78be44">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Categories -->
<div class="row">
    <div class="col-md-12 mental-container border-bottom-hr">
        <div class="portfolio"> 

            <div id="filters" class="sixteen columns">
                <ul class="clearfix">
                <li><a class="Active" id="all" href="#" data-filter="*"><h5>TÜMÜ</h5></a></li>
                <li><a class="" href="#" data-filter=".all_kurumsal"><h5>KURUMSAL</h5></a></li>
                <li><a class="" href="#" data-filter=".all_basili"><h5>BASILI</h5></a></li>
                <li><a class="" href="#" data-filter=".all_creative"><h5>KREATİF</h5></a></li>
                <li><a class="" href="#" data-filter=".all_media"><h5>SOSYAL MEDYA</h5></a></li>
                <li><a class="" href="#" data-filter=".all_production"><h5>PRODÜKSİYON</h5></a></li>
                <li><a class="" href="#" data-filter=".all_organization"><h5>ORGANİZASYON</h5></a></li>
                <li><a class="" href="#" data-filter=".all_urun"><h5>ÜRÜN</h5></a></li>
                </ul>
            </div>

            <div class="isotope fadeInLeft animated wow grid animated" style="position: relative; overflow: hidden; visibility: visible; animation-name: fadeInLeft; height: 400px;" id="portfolio_wrapper">  
                <!-- Kurumsal Item -->
                @foreach ($all_kurumsal as $all_kur_item)        
                <figure style="transform: translate3d(10px, 10px, 10px) scale3d(0.001, 0.001, 1); position: absolute; left: 0px; top: 0px; opacity: 0;height: 300px; width: 500px!important;" class="portfolio-item one-four all_kurumsal isotope-item effect-oscar isotope-hidden">
                    <div class="portfolio_img"> 
                        <img src="{{ asset('uploads/corporate/'.$all_kur_item->image) }}" alt="Portfolio 1" data-filter="all_kurumsal">
                    </div> 
                    <figcaption>
                        <div>
                            <a href="{{ url('mental/'.$all_kur_item->slug) }}" class="fancybox"> 
                            
                            <h2 style="font-weight:bold;">{{ $all_kur_item->meta_title }}</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
               
                <!-- Basili Item -->
                @foreach ($all_basili as $all_basili_item)        
                <figure style="transform: translate3d(10px, 10px, 10px) scale3d(0.001, 0.001, 1); position: absolute; left: 0px; top: 0px; opacity: 0;height: 300px; width: 500px!important;" class="portfolio-item one-four all_basili isotope-item effect-oscar isotope-hidden">
                    <div class="portfolio_img"> 
                        <img src="{{ asset('uploads/corporate/'.$all_basili_item->image) }}" alt="Portfolio 1" data-filter="all_basili">
                    </div> 
                    <figcaption>
                        <div>
                            <a href="{{ url('mental/'.$all_basili_item->slug) }}" class="fancybox"> 
                            <h2 style="font-weight:bold;">{{ $all_basili_item->meta_title }}</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
                
                <!-- Creative Item -->
                @foreach ($all_creative as $all_create_item)        
                <figure style="transform: translate3d(10px, 10px, 10px) scale3d(0.001, 0.001, 1); position: absolute; left: 0px; top: 0px; opacity: 0;height: 300px; width: 500px!important;" class="portfolio-item one-four all_creative isotope-item effect-oscar isotope-hidden">
                    <div class="portfolio_img"> 
                        <img src="{{ asset('uploads/corporate/'.$all_create_item->image) }}" alt="Portfolio 1" data-filter="all_creative">
                    </div> 
                    <figcaption>
                        <div>
                            <a href="{{ url('mental/'.$all_create_item->slug) }}" class="fancybox"> 
                            <h2 style="font-weight:bold;">{{ $all_create_item->meta_title }}</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
                
                <!-- Social Media Item -->
                @foreach ($all_media as $all_media_item)        
                <figure style="transform: translate3d(10px, 10px, 10px) scale3d(0.001, 0.001, 1); position: absolute; left: 0px; top: 0px; opacity: 0;height: 300px; width: 500px!important;" class="portfolio-item one-four all_media isotope-item effect-oscar isotope-hidden">
                    <div class="portfolio_img"> 
                        <img src="{{ asset('uploads/corporate/'.$all_media_item->image) }}" alt="Portfolio 1" data-filter="all_media">
                    </div> 
                    <figcaption>
                        <div>
                            <a href="{{ url('mental/'.$all_media_item->slug) }}" class="fancybox"> 
                            <h2 style="font-weight:bold;">{{ $all_media_item->meta_title }}</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
                
                <!-- Production Item -->
                @foreach ($all_production as $all_product_item)        
                <figure style="transform: translate3d(10px, 10px, 10px) scale3d(0.001, 0.001, 1); position: absolute; left: 0px; top: 0px; opacity: 0;height: 300px; width: 500px!important;" class="portfolio-item one-four all_production isotope-item effect-oscar isotope-hidden">
                    <div class="portfolio_img"> 
                        <img src="{{ asset('uploads/corporate/'.$all_product_item->image) }}" alt="Portfolio 1" data-filter="all_production">
                    </div> 
                    <figcaption>
                        <div>
                            <a href="{{ url('mental/'.$all_product_item->slug) }}" class="fancybox"> 
                            <h2 style="font-weight:bold;">{{ $all_product_item->meta_title }}</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
                
                <!-- Organization Item -->
                @foreach ($all_organization as $all_org_item)        
                <figure style="transform: translate3d(10px, 10px, 10px) scale3d(0.001, 0.001, 1); position: absolute; left: 0px; top: 0px; opacity: 0;height: 300px; width: 500px!important;" class="portfolio-item one-four all_organization isotope-item effect-oscar isotope-hidden">
                    <div class="portfolio_img"> 
                        <img src="{{ asset('uploads/corporate/'.$all_org_item->image) }}" alt="Portfolio 1" data-filter="all_organization">
                    </div> 
                    <figcaption>
                        <div>
                            <a href="{{ url('mental/'.$all_org_item->slug) }}" class="fancybox"> 
                            <h2 style="font-weight:bold;">{{ $all_org_item->meta_title }}</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
                
                <!-- Urun Item -->
                @foreach ($all_urun as $all_urun_item)        
                <figure style="transform: translate3d(10px, 10px, 10px) scale3d(0.001, 0.001, 1); position: absolute; left: 0px; top: 0px; opacity: 0;height: 300px; width: 500px!important;" class="portfolio-item one-four all_urun isotope-item effect-oscar isotope-hidden">
                    <div class="portfolio_img"> 
                        <img src="{{ asset('uploads/corporate/'.$all_urun_item->image) }}" alt="Portfolio 1" data-filter="all_urun">
                    </div> 
                    <figcaption>
                        <div>
                            <a href="{{ url('mental/'.$all_urun_item->slug) }}" class="fancybox"> 
                            <h2 style="font-weight:bold;">{{ $all_urun_item->meta_title }}</h2>
                            </a>
                        </div>
                    </figcaption>
                </figure>
                @endforeach
                
            </div>

        </div>
    </div>

    <!-- About Section -->
    @foreach ($all_about as $all_about_item)  
    <div class="section about_section layout_padding padding_top_0">
        <div class="mental-container">
            <div class="row">
                <div class="full margin-top_30 col-lg-10">
                    <div class="mid-text">
                        {!! $all_about_item->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection

<!--
<div class="bg-danger py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="owl-carousel category-carousel owl-theme">

                    @foreach ($all_categories as $all_cate_item)
                    <div class="item">
                        <a href="{{ url('mental/'.$all_cate_item->slug) }}" class="text-decoration-none">
                            <div class="card">
                                <img src="{{ asset('uploads/category/'.$all_cate_item->image) }}" alt="Image">
                                <div class="card-body text-center">
                                    <h5 class="text-dark">{{ $all_cate_item->name }}</h5>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-gray">
    <div class="container">
        <div class="border text-center p-3">
            <h3>Advertise Here</h3>
        </div>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>mental Software</h4>
                <div class="underline"></div>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ipsa nihil quos debitis et hic voluptas harum! Corrupti quos doloribus dolores numquam ipsa facere natus blanditiis! Autem aliquid ratione aspernatur.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit ipsa nihil quos debitis et hic voluptas harum! Corrupti quos doloribus dolores numquam ipsa facere natus blanditiis! Autem aliquid ratione aspernatur.
                </p>
            </div>
        </div>
    </div>
</div>

<div class="py-5 bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>All Categories List</h4>
                <div class="underline"></div>
            </div>
            @foreach ($all_categories as $all_cateitem)
            <div class="col-md-3">
                <div class="card card-body mb-3">
                    <a href="{{ url('mental/'.$all_cateitem->slug) }}" class="text-decoration-none">
                        <h5 class="text-dark mb-0">{{ $all_cateitem->name }}</h5>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<div class="py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Latest Posts</h4>
                <div class="underline"></div>
            </div>
            <div class="col-md-8">
                @foreach ($latest_posts as $latest_post_item)
                <div class="card card-body bg-gray shadow mb-3">
                    <a href="{{ url('mental/'.$latest_post_item->category->slug.'/'.$latest_post_item->slug) }}" class="text-decoration-none">
                        <h5 class="text-dark mb-0">{{ $latest_post_item->name }}</h5>
                    </a>
                    <h6>Posted On: {{ $latest_post_item->created_at->format('d-m-Y')}}</h6>
                </div>
                @endforeach
            </div>
            <div class="col-md-4">
                <div class="py-5 bg-gray">
                    <div class="container">
                        <div class="border text-center p-3">
                            <h3>Advertise Here</h3>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>-->

