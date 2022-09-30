@extends('layouts.master')

@section('title','Service')

@section('content')
   
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Service </h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/update-service/'.$service->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="mb-3">
                    <label>service Name</label>
                    <input type="text" name="name" value="{{ $service->name }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" rows="5" id="mySummernote" class="form-control">{{ $service->description }}</textarea>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection

