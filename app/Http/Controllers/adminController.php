<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\home;

class adminController extends Controller
{
    //

    public function index()
    {
        return view('admin.index');
    }

    public function home()
    {
        $home = home::all();
        return view('admin.section.home', [

            'home' => $home
        ]);
    }

    public function update(Request $request,home $id)
    {
        $data = $request->validate([

            'name' => 'required|string',
            'role' => 'required|string', 
            'description' => 'required|string'

        ]);

        $id->update($data);

        return redirect(route('admin.home'));
    }
}
