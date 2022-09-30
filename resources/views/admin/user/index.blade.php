@extends('layouts.master')

@section('title','View Users')

@section('content')

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <form action="{{ url('admin/delete-user') }}" method="POST">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete User</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="user_delete_id" id="user_id">
                <h5>Do you want to delete this user?</h5>
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
            <h4>View Users
            <!--  <a href="{{ url('admin/add-user')}}" class="btn btn-primary btn-sm float-end">Add User</a> -->
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
                            <th>Username</th>
                            <th>Email</th>
                            <th>Role</th> 
                            <th>Edit</th> 
                            <th>Delete</th> 
                    </thead>
                    <tbody>
                        @foreach ($users as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->role_as == '1' ? 'Admin':'User' }}</td>
                            <td>
                                <a href="{{ url('admin/user/'.$item->id) }}" class="btn btn-success">Edit</a>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger deleteUserBtn" value="{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
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
                $(document).on('click', '.deleteUserBtn', function (e) {
                e.preventDefault();
                
                var user_id = $(this).val();
                $('#user_id').val(user_id);
                $('#deleteModal').modal('show');
            });
        });
</script>

@endsection