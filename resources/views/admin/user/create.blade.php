@extends('layouts.master')

@section('title','Add User')

@section('content')
   
<div class="container-fluid px-4">

<div class="card mt-4">
    <div class="card-header">
        <h4>Add Users
            <a href="{{ url('admin/add-user')}}" class="btn btn-danger float-end">Back</a>
        </h4>
    </div>
    <div class="card-body">

        <form action="{{ url('admin/add-user') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                    <label>Full Name</label>
                    <input type="text" name="name" class="form-control">
            </div>
            
            <div class="mb-3">
                    <label>Email ID</label>
                    <input type="email" name="email" class="form-control">
            </div>

            <div class="mb-3">
                <label >Role as</label>
                <select name="role_as" class="form-control">
                    <option value="1" {{ $user->role_as == '1' ? 'selected':''}} >Admin</option>
                    <option value="0"  {{ $user->role_as == '0' ? 'selected':''}} >User</option>
                    <option value="2"  {{ $user->role_as == '2' ? 'selected':''}} >Blogger</option>
                </select>
            </div>

            <div class="mb-3">
                <button class="btn btn-primary">Save User</button>
            </div>
            </form>

    </div>
</div>

</div>

@endsection