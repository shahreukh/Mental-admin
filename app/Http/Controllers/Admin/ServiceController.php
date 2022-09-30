<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ServiceFormRequest;

class ServiceController extends Controller
{
    public function index()
    {
        $service = Service::all();
        return view('admin.service.index', compact('service'));
    }

    public function create()
    {
        return view('admin.service.create');
    }

    public function store(ServiceFormRequest $request)
    {
        $data = $request->validated();

        $service = new Service;
        $service->name = $data['name'];
        $service->description = $data['description'];

        $service->save();

        return redirect('admin/service')->with('message','Service Added Successfully.');
    }

    
    public function edit($service_id)
    {
        $service = Service::find($service_id);
        return view('admin.service.edit', compact('service'));
    }

    public function update(ServiceFormRequest $request, $service_id)
    {
        $data = $request->validated();

        $service = Service::find($service_id);
        $service->name = $data['name'];
        $service->description = $data['description'];
        $service->update();

        return redirect('admin/service')->with('message','Service Updated Successfully.');   
    }

    public function destroy(Request $request)
    {
        $service = Service::find($request->service_delete_id);

            $service->delete();

            return redirect('admin/service')->with('message','Service deleted successfully');
    }
}
