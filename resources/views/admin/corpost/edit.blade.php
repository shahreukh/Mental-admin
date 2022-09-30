@extends('layouts.master')

@section('title','Add Project Post')

@section('content')
   
<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>Edit Posts
                <a href="{{ url('admin/corposts')}}" class="btn btn-danger float-end">Back</a>
            </h4>
        </div>
        <div class="card-body">

            @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <div>{{$error}}</div>
                @endforeach
            </div>
            @endif
            
            <form action="{{ url('admin/update-corpost/'.$corpost->id)}}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="">Projects</label>
                    <select name="corporate_id" required class="form-control">
                        <option value="">-- Select Project --</option>
                         @foreach ($corporate as $corpitem)
                            <option value="{{ $corpitem->id }}" {{ $corpost->corporate_id == $corpitem->id ? 'selected':'' }}>
                                {{ $corpitem->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="">Post Name</label>
                    <input type="text" name="name" value="{{ $corpost->name }}" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">Slug</label>
                    <input type="text" name="slug" value="{{ $corpost->slug }}" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea type="text" name="description" id="mySummernote" class="form-control" rows="4" >{!! $corpost->description !!}</textarea>
                </div>

                <div class="mb-3">
                    <label for="">Youtube Iframe Link</label>
                    <input type="text" name="yt_iframe" value="{{ $corpost->yt_iframe }}" class="form-control" />
                </div>
                
                <h4>SEO Tags</h4>
                <div class="mb-3">
                    <label for="">Meta Title</label>
                    <input type="text" name="meta_title" value="{{ $corpost->meta_title }}" class="form-control" />
                </div>

                <div class="mb-3">
                    <label for="">Meta Description</label>
                    <textarea type="text" name="meta_description" class="form-control" rows="3">{{!! $corpost->meta_description !!}</textarea>
                </div>

                <div class="mb-3">
                    <label for="">Meta Keyword</label>
                    <textarea type="text" name="meta_keyword" class="form-control" rows="3">{!! $corpost->meta_keyword !!}</textarea>
                </div>

                <h4>Status</h4>
                <div class="rows">
                  <div class="col-md-4">
                    <div class="mb-3">
                      <label for="">Status</label>
                        <input type="checkbox" name="status" {{ $corpost->status == '1' ? 'checked':'' }}"/>
                    </div>
                  </div>

                  <div class="md-8">
                    <div class="mb-3">
                      <button type="submit" class="btn btn-primary float-end">Update Post</button>
                    </div>
                  </div>
                </div>  

            </form>
        </div>
    </div>
</div>

@endsection