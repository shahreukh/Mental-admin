@extends('layouts.master')

@section('title','Category')

@section('content')


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('admin/delete-corporate') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete category with its Post</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="corporate_delete_id" id="corporate_id">
                <h5>Do you want to delete this category record with all its posts?</h5>
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
            <h4>View Category<a href="{{ url('admin/add-corporate')}}" class="btn btn-primary btn-sm float-end">Add Category</a></h4>
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
                            <th>Category Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($corporate as $item)
        
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>
                                <img src="{{ asset('uploads/corporate/'.$item->image) }}" width="50px" height="50px" alt="img">
                            </td>
                            <td>{{ $item->status == '1' ? 'Hidden':'Shown' }}</td>
                            <td>
                                <a href="{{ url('admin/edit-corporate/'.$item->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <!-- <a href="{{ url('admin/delete-corporate/'.$item->id) }}" class="btn btn-danger">Delete</a> -->
                                <button type="button" class="btn btn-danger deleteCorporateBtn" value="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
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
                $(document).on('click', '.deleteCorporateBtn', function (e) {
                e.preventDefault();
                
                var corporate_id = $(this).val();
                $('#corporate_id').val(corporate_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>

@endsection