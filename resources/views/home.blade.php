<!-- Home -->

@extends ('layouts.app')

@section('title','Mental Home')

@section('content')
<br><br>
<div class="section carreer-section">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <li class="centered">
                    <button type="submit" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-primary" style="background-color:#78be44; border-color:#78be44;">
                        {{ __('Logout') }}
                    </button>
                    
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>

                </li>
               
            </div>
            <br><br><br><br><br>
        </div>
    </div>
</div>
</div>
</div>
@endsection
