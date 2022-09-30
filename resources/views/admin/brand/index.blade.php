@extends('layouts.master')

@section('title','Brands')

@section('content')

<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('admin/delete-brand') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Brand</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="brand_delete_id" id="brand_id">
                <h5>Do you want to delete this Brand?</h5>
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
            <h4>View References<a href="{{ url('admin/add-brand')}}" class="btn btn-primary btn-sm float-end">Add brand</a></h4>
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
                            <th>Name</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                    @foreach ($brand as $brand_item)
                        <tr>
                            <td>{{ $brand_item->id }}</td>
                            <td>{{ $brand_item->name }}</td>
                            <td>
                                <img src="{{ asset('uploads/brand/'.$brand_item->image) }}" width="50px" height="50px" alt="img">
                            </td>
                            <td>
                                <a href="{{ url('admin/edit-brand/'.$brand_item->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deleteBrandBtn" value="{{ $brand_item->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
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
                $(document).on('click', '.deleteBrandBtn', function (e) {
                e.preventDefault();
                
                var brand_id = $(this).val();
                $('#brand_id').val(brand_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>

@endsection