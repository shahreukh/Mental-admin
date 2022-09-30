@extends('layouts.master')

@section('title','View Post')

@section('content')

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('admin/delete-post') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="post_delete_id" id="post_id">
                <h5>Do you want to delete this post?</h5>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Yes Delete</button>
            </div>
        </form>
    </div>
  </div>
</div>

<div class="container-fluid px-4">

    <div class="card mt-4">
        <div class="card-header">
            <h4>View Posts
                <a href="{{ url('admin/add-post')}}" class="btn btn-primary float-end">Add Posts</a>
            </h4>
        </div>
        <div class="card-body">
            
            @if (session('message'))
                <div class="alert alert-success">{{ session('message') }}</div>
            @endif
            
            <div class="table-responsive">
                <table id="myDataTable" class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Category</th>
                            <th>Post Name</th>
                            <th>Status</th> 
                            <th>Edit</th> 
                            <th>Delete</th> 
                    </thead>
                    <tbody>
                        @foreach ($posts as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->category->name }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->status == '1' ? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/post/'.$item->id) }}" class="btn btn-success">Edit</a>
                            </td> 
                            <td>
                            <button type="button" class="btn btn-danger deletePostBtn" value="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
                            </td> 
                        </tr>   
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection

@section('scripts')

<script>
        $(document).ready(function () {
                $(document).on('click', '.deletePostBtn', function (e) {
                e.preventDefault();
                
                var post_id = $(this).val();
                $('#post_id').val(post_id);
                $('#deleteModal').modal('show');
            });
        });
</script>

@endsection