<?php

namespace App\Http\Controllers\Admin;

use App\Models\Corpost;
use App\Models\Corporate;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\CorpostFormRequest;

class CorpostController extends Controller
{
    public function index()
    {
        $corposts = Corpost::all();
        return view('admin.corpost.index', compact('corposts'));
    }

    public function create()
    {
        $corporate = Corporate::where('status', '0')->get();
        return view('admin.corpost.create', compact('corporate'));
    }

    public function store(CorpostFormRequest $request)
    {
        $data = $request->validated();

        $corpost = new Corpost;
        $corpost->corporate_id = $data['corporate_id'];
        $corpost->name = $data['name'];
        $corpost->slug = Str::slug($request->slug);
        $corpost->description = $data['description'];
        $corpost->yt_iframe = $data['yt_iframe'];
        $corpost->meta_title = $data['meta_title'];
        $corpost->meta_description = $data['meta_description'];
        $corpost->meta_keyword = $data['meta_keyword'];
        $corpost->status = $request->status == true ? '1':'0';
        $corpost->created_by = Auth::user()->id;
        $corpost->save();

        return redirect('admin/corposts')->with('message','Post Added Successfully');
    }

    public function edit($corpost_id)
    {
        $corporate = Corporate::where('status','0')->get();
        $corpost= Corpost::find($corpost_id);
        return view('admin.corpost.edit', compact('corpost','corporate'));
    }

    public function update(CorpostFormRequest $request,$corpost_id)
    {
        $data = $request->validated();

        $corpost = Corpost::find($corpost_id);
        $corpost->corporate_id = $data['corporate_id'];
        $corpost->name = $data['name'];
        $corpost->slug = Str::slug($request->slug);
        $corpost->description = $data['description'];
        $corpost->yt_iframe = $data['yt_iframe'];
        $corpost->meta_title = $data['meta_title'];
        $corpost->meta_description = $data['meta_description'];
        $corpost->meta_keyword = $data['meta_keyword'];
        $corpost->status = $request->status == true ? '1':'0';
        $corpost->created_by = Auth::user()->id;
        $corpost->update();

        return redirect('admin/corposts')->with('message','Post Updated Successfully');
    }

    public function destroy(Request $request)
    {
        $corpost = Corpost::find($request->corpost_delete_id);

            $corpost->delete();

            return redirect('admin/corposts')->with('message','Post deleted successfully');
    }
}