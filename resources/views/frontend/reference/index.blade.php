<!-- References -->
@extends ('layouts.app')



@section('content')


    <div class="section carreer-section referance-section">
        <div class="mental-container no-background">
            <p class="referance-text">Markalar</p>
            <div class="row referance-logo-container">
                 @foreach ($all_brands as $all_brand_item)
                <div class="col-lg-2 col-md-3 logo-container">
                    <img src="{{ asset('uploads/brand/'.$all_brand_item->image) }}" alt="" >
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection