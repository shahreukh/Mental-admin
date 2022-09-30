@extends ('layouts.app')

@section('title', "$corporate->meta_title")
@section('meta_description', "$corporate->description")
@section('meta_keyword', "$corporate->meta_keyword")

@section('content')

<div class="py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-9">

                <div class="corporate-heading">
                    <h4>{{ $corporate->name }}</h4>
                </div>

                @forelse ($corpost as $corpostitem)
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        <a href="{{ url('mental/'.$corporate->slug.'/'.$corpostitem->slug) }}" class="text-decoration-none">
                            <h2 class="post-heading">{{ $corpostitem->name }}</h2>
                        </a>
                        <h6>
                            Posted on: {{ $corpostitem->created_at->format('d-m-Y') }}
                            <span class="ms-3">Posted by: {{ $corpostitem->user->name }}</span>
                        </h6>
                    </div>
                </div>
                @empty
                <div class="card card-shadow mt-4">
                    <div class="card-body">
                        <h1>No Postost Available</h1>
                    </div>
                </div>
                @endforelse

                <div class="your-paginate mt-4">
                    {{ $corpost->links() }}
                </div>

            </div>
    
        </div>
    </div>
</div>

@endsection