<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class workController extends Controller
{
    //

    public function index()
    {
        return view('admin.section.portfolio');
    }
}
