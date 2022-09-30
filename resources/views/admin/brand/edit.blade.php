@extends('layouts.master')

@section('title','Edit Reference')

@section('content')
   
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Reference </h4>
        </div>

        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/update-brand/'.$brand->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="{{ $brand->name }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Image</label>
                    <input type="file" name="image" class="form-control">
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update Reference</button>
                </div>
                
            </div>
            </form>

        </div>
    </div>
</div>

@endsection

