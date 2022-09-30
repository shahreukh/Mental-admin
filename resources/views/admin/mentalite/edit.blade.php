@extends('layouts.master')

@section('title','Edit Mentalite')

@section('content')
   
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4 class="">Edit Mentalite </h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif

            <form action="{{ url('admin/update-mentalite/'.$mentalite->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            
                <div class="mb-3">
                    <label>Mentalite Name</label>
                    <input type="text" name="name" value="{{ $mentalite->name }}" class="form-control">
                </div>

                <div class="mb-3">
                    <label>Introduction</label>
                    <textarea name="introduction" rows="5" id="mySummernote1" class="form-control">{{ $mentalite->introduction }}</textarea>
                </div>

                <div class="mb-3">
                    <label>Description</label>
                    <textarea name="description" rows="5" id="mySummernote" class="form-control">{{ $mentalite->description }}</textarea>
                </div>

                <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Update mentalite</button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection

