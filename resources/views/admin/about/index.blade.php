@extends('layouts.master')

@section('title','About')

@section('content')


<!-- Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('admin/delete-about') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete About</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="about_delete_id" id="about_id">
                <h5>Do you want to delete About?</h5>
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
            <h4>View About<a href="{{ url('admin/add-about')}}" class="btn btn-primary btn-sm float-end">Add About</a></h4>
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
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>

                    @foreach ($about as $about_item)

                        <tr>
                            <td>{{ $about_item->id }}</td>
                            <td>{{ $about_item->name }}</td>
                            <td>
                                <a href="{{ url('admin/edit-about/'.$about_item->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deleteAboutBtn" value="{{ $about_item->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
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
                $(document).on('click', '.deleteAboutBtn', function (e) {
                e.preventDefault();
                
                var about_id = $(this).val();
                $('#about_id').val(about_id);
                $('#deleteModal').modal('show');
            });
        });
    </script>

@endsection