<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.user.index', compact('users'));
    }

    public function edit($user_id)
    {
        $user = User::find($user_id);
        return view('admin.user.edit', compact('user'));
    }

    public function create()
    {
        return view('admin.user.create');
    }
    
    public function update(Request $request, $user_id)
    {
        $user = User::find($user_id);
        if($user)
        {
            $user->role_as = $request->role_as;
            $user->update();
            return redirect('admin/users')->with('message', 'Updated Successflly');
        }
        return redirect('admin/users')->with('message', 'No User Found');
    }
    
    public function destroy(Request $request)
    {
        $user = User::find($request->user_delete_id);

            $user->delete();

            return redirect('admin/users')->with('message','user deleted successfully');
    }
}
