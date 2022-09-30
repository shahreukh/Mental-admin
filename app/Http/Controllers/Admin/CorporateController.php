<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CorporateFormRequest;
use App\Models\Corporate;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class CorporateController extends Controller
{
    public function index()
    {
        $corporate = Corporate::all();
        return view('admin.corporates.index', compact('corporate'));
    }
    
    public function create()
    {
        return view('admin.corporates.create');
    }

    public function store(CorporateFormRequest $request)
    {
        $data = $request->validated();

        $corporate = new Corporate;
        $corporate->name = $data['name'];
        $corporate->slug = Str::slug($request->slug);
        $corporate->description = $data['description'];

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time().'.'. $file->getClientOriginalExtension();
            $file->move('uploads/corporate/', $filename);
            $corporate->image = $filename;
        }

        $corporate->meta_title = $data['meta_title'];
        $corporate->meta_description = $data['meta_description'];
        $corporate->meta_keyword = $data['meta_keyword'];

        $corporate->navbar_status = $request->navbar_status == true ? '1':'0';
        $corporate->status = $request->status == true ? '1':'0';
        $corporate->created_by = Auth::user()->id;
        $corporate->save();

        return redirect('admin/corporate')->with('message','Corporate Added Successfully.');
    }

    public function edit($corporate_id)
    {
        $corporate = Corporate::find($corporate_id);
        return view('admin.corporates.edit', compact('corporate'));
    }

    public function update(CorporateFormRequest $request, $corporate_id)
    {
        $data = $request->validated();

        $corporate = Corporate::find($corporate_id);
        $corporate->name = $data['name'];
        $corporate->slug = Str::slug($request->slug);
        $corporate->description = $data['description'];

        if($request->hasfile('image')){

            $destination = 'uploads/corporate/'.$corporate->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            
            $file = $request->file('image');
            $filename = time().'.'. $file->getClientOriginalExtension();
            $file->move('uploads/corporate/', $filename);
            $corporate->image = $filename;
        }

        $corporate->meta_title = $data['meta_title'];
        $corporate->meta_description = $data['meta_description'];
        $corporate->meta_keyword = $data['meta_keyword'];

        $corporate->navbar_status = $request->navbar_status == true ? '1':'0';
        $corporate->status = $request->status == true ? '1':'0';
        $corporate->created_by = Auth::user()->id;
        $corporate->update();

        return redirect('admin/corporate')->with('message','Corporate Updated Successfully.');   
    }

    public function destroy(Request $request)
    {
        $corporate = Corporate::find($request->corporate_delete_id);
        if($corporate)
        {
            $destination = 'uploads/corporate/'.$corporate->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $corporate->corposts()->delete();
            $corporate->delete();

            return redirect('admin/corporate')->with('message','Corporate deleted with its posts successfully');
        }
        else
        {
            return redirect('admin/corporate')->with('message','No Corporate ID found.');
        }
    }
}
