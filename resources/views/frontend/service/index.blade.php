<!-- SERVICES -->

@extends ('layouts.app')

@section('title', 'MENTAL / CREATIVE')

@section('content')
 
<!-- Start Banner -->
<div class="ulockd-home-slider">
    <div class="row">
        <div id="mental-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <video  preload="auto" autoplay=""  muted="" playsinline="" data-object-fit="cover" style="width: 100%!important">
                        <source src="{{ asset('assets/mental/images/carousel/videos/hizmetlerbanner.mp4') }}" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section -->
<div class="section about-section services-section">
    <div class="mental-container no-background">
        <div class="row">
            <div class="col-6 col-lg-2 col-md-4 col-sm-6 mid-icons-container">
                <img class="mid-icons" src="{{ asset('assets/mental/images/mid-icons/paint.png') }}" />
                <p>MENTAL CREATIVE TASARIM</p>
            </div>
            <div class="col-6 col-lg-2 col-md-4 col-sm-6 mid-icons-container">
                <img class="mid-icons icon-video" src="{{ asset('assets/mental/images/mid-icons/video-camera.png') }}" />
                <p>MENTAL CREATIVE PRODÜKSİYON</p>
            </div>
            <div class="col-6 col-lg-2 col-md-4 col-sm-6 mid-icons-container">
                <img class="mid-icons" src="{{ asset('assets/mental/images/mid-icons/book.png') }}" />
                <p>MENTAL CREATIVE KİTAP</p>
            </div>
            <div class="col-6 col-lg-2 col-md-4 col-sm-6 mid-icons-container">
                <img class="mid-icons" src="{{ asset('assets/mental/images/mid-icons/billboard.png') }}" />
                <p>MENTAL CREATIVE REKLAM</p>
            </div>
            <div class="col-6 col-lg-2 col-md-4 col-sm-6 mid-icons-container">
                <img class="mid-icons" src="{{ asset('assets/mental/images/mid-icons/calendar.png') }}" />
                <p>MENTAL CREATIVE EVENT</p>
            </div>
            <div class="col-6 col-lg-2 col-md-4 col-sm-6 mid-icons-container">
                <img class="mid-icons icon-share" src="{{ asset('assets/mental/images/mid-icons/share.png') }}" />
                <p>MENTAL CREATIVE DİJİTAL</p>
            </div>
        </div>
    </div>
</div>

<!-- Section -->
@foreach ($all_services as $all_service_item)
<div class="section about-section layout_padding padding_top_0">
    <div class="mental-container">
        <div class="row about-wrapper full margin-top_30">
            <div class="col-12">
                {!! $all_service_item->description !!}
            </div>
            @endforeach
        </div>
    </div>
</div>

@endsection

<style>
.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto {
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
}
</style>