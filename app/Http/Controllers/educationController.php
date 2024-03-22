<?php

namespace App\Http\Controllers;
use App\Models\education;
use Illuminate\Http\Request;

class educationController extends Controller
{
    //
    public function index()
    {
        $education = education::all();
        return view('admin.section.eduction', [

            'education' => $education
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'level' => 'required|string',
            'school' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string' 
           

        ]);

        $addeducation = education::create($data);
        return redirect(route('education.index'));
    }

    public function update(Request $request,education $id)
    {
        $data = $request->validate([

            'level' => 'required|string',
            'school' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string' 
           

        ]);

        $id->update($data);
        return redirect(route('education.index'));
    }

    public function destroy(Request $request,education $id)
    {

        $id->delete();
        return redirect(route('education.index'));
    }
}
