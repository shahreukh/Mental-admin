@extends('layouts.master')

@section('title','References')

@section('content')
   
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Add Reference </h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/add-brand') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                
                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" required class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Save Reference</button>
                </div>
             
            </form>
        </div>
    </div>
</div>

@endsection

