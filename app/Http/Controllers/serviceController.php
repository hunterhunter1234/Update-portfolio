<?php

namespace App\Http\Controllers;
use App\Models\service;
use Illuminate\Http\Request;

class serviceController extends Controller
{
    //

    public function index()
    {
        $service = service::all();
        
        return view('admin.section.service', [

            'service' => $service
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string' 
           

        ]);

        $addservice = service::create($data);
        return redirect(route('service.index'));
    }

    public function update(Request $request,service $id)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'description' => 'required|string' 
           

        ]);

        $id->update($data);
        return redirect(route('service.index'));
    }

    public function destroy(Request $request,service $id)
    {

        $id->delete();
        return redirect(route('service.index'));
    }
}
