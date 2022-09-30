@extends('layouts.master')

@section('title','View Posts')

@section('content')

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('admin/delete-corpost') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="corpost_delete_id" id="corpost_id">
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
            <h4>View Portfolio
                <a href="{{ url('admin/add-corpost')}}" class="btn btn-primary float-end">Add Portfolio</a>
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
                            <th>Corporate</th>
                            <th>Post Name</th>
                            <th>Status</th> 
                            <th>Edit</th> 
                            <th>Delete</th> 
                    </thead>
                    <tbody>
                        @foreach ($corposts as $corpitem)
                        <tr>
                            <td>{{ $corpitem->id }}</td>
                            <td>{{ $corpitem->corporate->name }}</td>
                            <td>{{ $corpitem->name }}</td>
                            <td>{{ $corpitem->status == '1' ? 'Hidden':'Visible' }}</td>
                            <td>
                                <a href="{{ url('admin/corpost/'.$corpitem->id) }}" class="btn btn-success">Edit</a>
                            </td> 
                            <td>
                            <button type="button" class="btn btn-danger deleteCorpostBtn" value="{{ $corpitem->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button></td> 
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
                $(document).on('click', '.deleteCorpostBtn', function (e) {
                e.preventDefault();
                
                var post_id = $(this).val();
                $('#corpost_id').val(post_id);
                $('#deleteModal').modal('show');
            });
        });
</script>

@endsection