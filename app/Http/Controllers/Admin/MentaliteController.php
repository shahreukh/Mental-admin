<?php

namespace App\Http\Controllers\Admin;

use App\Models\Mentalite;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\MentaliteFormRequest;

class MentaliteController extends Controller
{
    public function index()
    {
        $all_mentalites = Mentalite::all();
        return view('admin.mentalite.index', compact('all_mentalites'));
    }

    public function create()
    {
        return view('admin.mentalite.create');
    }

    public function store(MentaliteFormRequest $request)
    {
        $data = $request->validated();

        $mentalite = new Mentalite;
        $mentalite->name = $data['name'];
        $mentalite->introduction = $data['introduction'];
        $mentalite->description = $data['description'];

        $mentalite->save();

        return redirect('admin/mentalite')->with('message','Mentalite Added Successfully.');
    }

    
    public function edit($mentalite_id)
    {
        $mentalite = Mentalite::find($mentalite_id);
        return view('admin.mentalite.edit', compact('mentalite'));
    }

    public function update(MentaliteFormRequest $request, $mentalite_id)
    {
        $data = $request->validated();

        $mentalite = Mentalite::find($mentalite_id);
        $mentalite->name = $data['name'];
        $mentalite->introduction = $data['introduction'];
        $mentalite->description = $data['description'];
        $mentalite->update();

        return redirect('admin/mentalite')->with('message','Mentalite Updated Successfully.');   
    }

    public function destroy(Request $request)
    {
        $mentalite = Mentalite::find($request->mentalite_delete_id);

            $mentalite->delete();

            return redirect('admin/mentalite')->with('message','Mentalite deleted successfully');
    }
}
