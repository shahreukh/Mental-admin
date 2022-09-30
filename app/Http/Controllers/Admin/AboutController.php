<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\AboutFormRequest;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::all();
        return view('admin.about.index', compact('about'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(AboutFormRequest $request)
    {
        $data = $request->validated();

        $about = new About;
        $about->name = $data['name'];
        $about->description = $data['description'];

        $about->save();

        return redirect('admin/about')->with('message','About Added Successfully.');
    }

    
    public function edit($about_id)
    {
        $about = About::find($about_id);
        return view('admin.about.edit', compact('about'));
    }

    public function update(AboutFormRequest $request, $about_id)
    {
        $data = $request->validated();

        $about = About::find($about_id);
        $about->name = $data['name'];
        $about->description = $data['description'];
        $about->update();

        return redirect('admin/about')->with('message','About Updated Successfully.');   
    }

    public function destroy(Request $request)
    {
        $about = About::find($request->about_delete_id);

            $about->delete();

            return redirect('admin/about')->with('message','About deleted successfully');
    }
}
