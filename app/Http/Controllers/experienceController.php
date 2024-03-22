<?php

namespace App\Http\Controllers;
use App\Models\experience;

use Illuminate\Http\Request;

class experienceController extends Controller
{
    //
    public function index()
    {
        $experience = experience::all();
        return view('admin.section.experience', [

            'experience' => $experience
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'company' => 'required|string',
            'role' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string' 
           

        ]);

        $addexperience = experience::create($data);
        return redirect(route('experience.index'));
    }

    public function update(Request $request,experience $id)
    {
        $data = $request->validate([

            'company' => 'required|string',
            'role' => 'required|string',
            'start' => 'required|string',
            'end' => 'required|string' 
           

        ]);

        $id->update($data);
        return redirect(route('experience.index'));
    }

    public function destroy(Request $request,experience $id)
    {

        $id->delete();
        return redirect(route('experience.index'));
    }
}
