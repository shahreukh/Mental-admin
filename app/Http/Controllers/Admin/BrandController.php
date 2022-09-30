<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use App\Http\Requests\Admin\BrandFormRequest;

class BrandController extends Controller
{
    
    public function index()
    {
        $brand = Brand::all();
        return view('admin.brand.index', compact('brand'));
    }
    
    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(BrandFormRequest $request)
    {
        $data = $request->validated();

        $brand = new Brand;
        $brand->name = $data['name'];

        if($request->hasfile('image')){
            $file = $request->file('image');
            $filename = time().'.'. $file->getClientOriginalExtension();
            $file->move('uploads/brand/', $filename);
            $brand->image = $filename;
        }

        $brand->save();

        return redirect('admin/brand')->with('message','Reference Added Successfully.');
    }

    public function edit($brand_id)
    {
        $brand = brand::find($brand_id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function update(BrandFormRequest $request, $brand_id)
    {
        $data = $request->validated();

        $brand = Brand::find($brand_id);
        $brand->name = $data['name'];

        if($request->hasfile('image')){

            $destination = 'uploads/brand/'.$brand->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            
            $file = $request->file('image');
            $filename = time().'.'. $file->getClientOriginalExtension();
            $file->move('uploads/brand/', $filename);
            $brand->image = $filename;
        }

        $brand->update();

        return redirect('admin/brand')->with('message','Reference Updated Successfully.');   
    }

    public function destroy(Request $request)
    {
        $brand = Brand::find($request->brand_delete_id);
        if($brand)
        {
            $destination = 'uploads/brand/'.$brand->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $brand->delete();

            return redirect('admin/brand')->with('message','Reference deleted successfully');
        }
        else
        {
            return redirect('admin/brand')->with('message','No Reference ID found.');
        }
    }
}
