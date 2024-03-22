<?php

namespace App\Http\Controllers;
use App\Models\skill;


use Illuminate\Http\Request;

class skillController extends Controller
{
    //

    public function index()
    {
        $skill = skill::all();
        return view('admin.section.skill', [

            'skill' => $skill
        ]);
    }

    public function add(Request $request)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'percent' => 'required|string' 
           

        ]);

        $addskill = skill::create($data);
        return redirect(route('skill.index'));
    }

    public function update(Request $request,skill $id)
    {
        $data = $request->validate([

            'title' => 'required|string',
            'percent' => 'required|string' 
           

        ]);

        $id->update($data);
        return redirect(route('skill.index'));
    }

    public function destroy(Request $request,skill $id)
    {

        $id->delete();
        return redirect(route('skill.index'));
    }

}
